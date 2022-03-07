<?php

namespace App\Mail;

require dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

use Dotenv\Dotenv;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class SendMailComNamePhoneMessage
{

    public function __construct($name, $phone,  ?string $message)
    {
        $this->page_name = ucfirst(substr($_SERVER['REQUEST_URI'], 1));

        $this->name = $name;
        $this->phone = $phone;

        /* Si le message existe un prévoit un saut de ligne */
        if($message) {
            $this->message = $message.'<br>';
        /* Sinon on le laisse vide */
        } else {
            $this->message = '';
        }
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
            /* $mail->addReplyTo($this->email, $this->name); */
            /*
            $mail->addAddress('ellen@example.com');               
            $mail->addCC('cc@example.com');
            $mail->addBCC('bcc@example.com'); 
            */

            //Content
            $mail->Subject = 'ERP FORMATION - Formulaire '.$this->page_name;
            $mail->isHTML(true); // Set email format to HTML and use HTML tags

            $mail->Body = 
            '<p><strong>'.$this->name . '</strong> vous a contacte pour une demande de renseignements via la page <strong>'.$this->page_name.'</strong>.</p>'.$this->message . '<p>Telephone : <strong>' . $this->phone . '</strong></p>';

            $mail->send();

            return true;

        } catch (Exception $e) {
            // Error Mail Notification
            // $email_error = "Une erreur est survenue, votre message n'a pas été envoyé !";
            // return $email_error = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; */
            // return $e->getMessage();
        }
    }

}