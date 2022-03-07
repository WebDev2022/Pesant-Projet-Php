<?php

namespace App\Controllers;

use App\Form\Form;
use App\Mail\SendMailPopUp;

class PopUpController extends Controller
{
    public function sendmail_popup()
    {
        $form = new Form();

        if ($form->validate_form($_POST, $_FILES)) {

            $mail = new SendMailPopUp(
                $form->post_email['name'],
                $form->post_email['phone'],
            );

            $mail->send_email();

            echo json_encode(['success' => 'Votre demande a bien été envoyée ! <br> 
            <strong>ERP Formation</strong> vous contactera dans ses meilleurs délais !']);
        } else {
            // Return errors Front End
            echo json_encode(['errors' => $form->invalid_fields]);
        }
    }
}
