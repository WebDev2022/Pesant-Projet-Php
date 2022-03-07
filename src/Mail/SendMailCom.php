<?php

namespace App\Mail;

require dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

use App\FileUpload;
use App\Models\BackupMail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

class SendMailCom
{

    public function __construct($name, $phone, $email, $message, ?array $files)
    {
        $this->page_name = ucfirst(substr($_SERVER['REQUEST_URI'], 1));

        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->message = $message;
        $this->files = $files;
    }

    public function send_email()
    {

        $dotenv = Dotenv::createImmutable(dirname(dirname(__DIR__)));
        $dotenv->load();

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF; //Enable debug output => SMTP::DEBUG_SERVER; OR SMTP::DEBUG_OFF; 
            $mail->isSMTP();
            $mail->Host = $_ENV['MAIL_HOST'];
            $mail->SMTPAuth = true; //Enable SMTP authentication
            $mail->Username = $_ENV['MAIL_COMMERCIAL'];
            $mail->Password = $_ENV['MAIL_PASSWORD'];
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
            $mail->Port = $_ENV['MAIL_PORT'];

            //Recipients
            $mail->setFrom('from@erpformation.com', 'ERP-FORMATION');
            $mail->addAddress($_ENV['MAIL_COMMERCIAL'], 'ERP-APPLICATION');
            $mail->addReplyTo($this->email, $this->name);

            /*
            $mail->addAddress('ellen@example.com');               
            $mail->addCC('cc@example.com');
            $mail->addBCC('bcc@example.com'); 
            */

            //Attachments
            /* Si il y a au moins un fichier à l'upload */

            /* Prepare string backup images name files */
            $files_attachments_names = '';

            if(FileUpload::upload_files_exist($this->files)) {
                foreach($this->files['files']['name'] as $key => $file_name) {
                    $files_attachments_names .= $file_name .', ';

                    /* Attach the file to the email */
                    $mail->addAttachment($this->files['files']['tmp_name'][$key], $file_name );  
                }
            }

            //Content
            $mail->Subject = 'ERP FORMATION - Formulaire '.$this->page_name;
            $mail->isHTML(true); // Set email format to HTML and use HTML tags

            $mail->Body = 
            '<p><strong>'.$this->name . '</strong> vous a contacte pour une demande de renseignements via la page <strong>'.$this->page_name.'</strong>.</p>'.$this->message . '<p>Telephone : <strong>' . $this->phone . '</strong></p>';

            $mail->send();

            /* Backup of email sent in database */
            $backup = new BackupMail();

            $backup->create([
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
                'message' => $this->message,
                'files_attached' => substr($files_attachments_names, 0, -2),
                'date' =>  date('Y-m-d H:i:s')
            ]);


            /* Si il y a au moins un fichier à l'upload */
            if(FileUpload::upload_files_exist($this->files)) {
                /* Save the files to the backupMailFiles Directory */
                foreach($this->files['files']['name'] as $key => $file_name) {

                    $date = date('Y-m-d-H\h-i\m-s\s');

                    $path_file = dirname(dirname(__DIR__)). DIRECTORY_SEPARATOR . 'backupMailFiles/'.$this->name.'-('.$date.')/'.$file_name;

                    $path_dir = dirname(dirname(__DIR__)). DIRECTORY_SEPARATOR . 'backupMailFiles/'.$this->name.'-('.$date.')/';

                    /* Si le dossier n'existe pas on le créé */
                    if(!file_exists($path_dir)) {
                        mkdir($path_dir, 0777, true);
                    } 

                    /* Si le fichier existe */
                    if(!file_exists($path_file)) {
                        move_uploaded_file($this->files['files']['tmp_name'][$key], $path_file); 
                    }
                }
            }


            return true;

        } catch (Exception $e) {
            // Error Mail Notification
            // $email_error = "Une erreur est survenue, votre message n'a pas été envoyé !";
            // return $email_error = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; */
            // return $e->getMessage();
        }
    }

}