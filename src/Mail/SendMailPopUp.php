<?php

namespace App\Mail;

require dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

class SendMailPopUp
{

    public function __construct(?string $name, $phone)
    {
        $this->page_name = 'PopUp de Rappel';
        $this->phone = $phone;

        if(!empty($name)) {
            $this->name = $name;
        } else {
            $this->name = 'Quelqu\'un';
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

            /*
            $mail->addAddress('ellen@example.com');               
            $mail->addCC('cc@example.com');
            $mail->addBCC('bcc@example.com'); 
            */

            //Content
            $mail->Subject = 'ERP FORMATION - Formulaire '.$this->page_name;
            $mail->isHTML(true); // Set email format to HTML and use HTML tags

            $mail->Body = 
            '<p><strong>'.$this->name . '</strong> vous a contacte pour une demande de renseignements via la <strong>'.$this->page_name.'</strong>.</p><p>Telephone : <strong>' . $this->phone . '</strong></p>';

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