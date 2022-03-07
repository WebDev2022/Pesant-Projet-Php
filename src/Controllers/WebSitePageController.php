<?php

namespace App\Controllers;

use App\Form\Form;
use App\Mail\SendMailCom;
use App\Mail\SendMailComNamePhoneMessage;
use App\Mail\SendMailErp;

class WebSitePageController extends Controller
{

    public function index()
    {
        $this->render('accueil', [ 'title' => 'Accueil']);
    }

    public function presentation()
    {
        $this->render('presentation', ['title' => 'Présentation']);
    }

    public function photos()
    {
        $this->render('photos', ['title' => 'Photos']);
    }

    public function recrutement()
    {
        $form = new Form();

        if ($form->validate_form()) {

            $mail = new SendMailCom(
                $form->post_email['name'],
                $form->post_email['phone'],
                $form->post_email['email'],
                $form->post_email['message'],
                $_FILES
            );

            if ($mail->send_email()) {
                $message_success = "Votre message a bien été envoyé !";
            } else {
                $email_error = "Une erreur est survenue, votre message n'a pas été envoyé !";
            }
        } else {

            $invalid_fields = $form->invalid_fields;
            $old_values = $form->old_values;
        }


        $this->render('recrutement', [
            'title' =>  'Recrutement',
            'invalid_fields' => isset($invalid_fields) ? $invalid_fields : null,
            'message_success' => isset($message_success) ? $message_success : null,
            'old_values' => isset($old_values) ? $old_values : null,
            'email_error' => isset($email_error) ? $email_error : null,
        ]);
    }

    public function contact()
    {
        $form = new Form();

        if ($form->validate_form()) {

            $mail = new SendMailErp(
                $form->post_email['name'],
                $form->post_email['phone'],
                $form->post_email['email'],
                $form->post_email['message'],
                $_FILES
            );

            if ($mail->send_email()) {
                $message_success = "Votre message a bien été envoyé !";
            } else {
                $email_error = "Une erreur est survenue, votre message n'a pas été envoyé !";
            }
        } else {

            $invalid_fields = $form->invalid_fields;
            $old_values = $form->old_values;
        }

        $this->render('contact', [
            'title' => 'Contact',
            'invalid_fields' => isset($invalid_fields) ? $invalid_fields : '',
            'message_success' => isset($message_success) ? $message_success : '',
            'old_values' => isset($old_values) ? $old_values : '',
            'email_error' => isset($email_error) ? $email_error : '',
        
        ]);
    }

    public function inscription()
    {
        $form = new Form();

        if ($form->validate_form()) {

            $mail = new SendMailComNamePhoneMessage(
                $form->post_email['name'],
                $form->post_email['phone'],
                $form->post_email['message']
            );

            if ($mail->send_email()) {
                $message_success = "Votre message a bien été envoyé !";
            } else {
                $email_error = "Une erreur est survenue, votre message n'a pas été envoyé !";
            }
        } else {
            $invalid_fields = $form->invalid_fields;
            $old_values = $form->old_values;
        }


        $this->render('inscription', [
            'title' => 'Inscription',
            'invalid_fields' => isset($invalid_fields) ? $invalid_fields : null,
            'message_success' => isset($message_success) ? $message_success : null,
            'old_values' => isset($old_values) ? $old_values : null,
            'email_error' => isset($email_error) ? $email_error : null,
        ]);
    }

    public function renseignements()
    {
        $form = new Form();

        if ($form->validate_form()) {

            $mail = new SendMailComNamePhoneMessage(
                $form->post_email['name'],
                $form->post_email['phone'],
                $form->post_email['message']
            );

            if ($mail->send_email()) {
                $message_success = "Votre message a bien été envoyé !";
            } else {
                $email_error = "Une erreur est survenue, votre message n'a pas été envoyé !";
            }
        } else {
            $invalid_fields = $form->invalid_fields;
            $old_values = $form->old_values;
        }

        $this->render('renseignements', [
            'title' => 'Demande de renseignements',
            'invalid_fields' => isset($invalid_fields) ? $invalid_fields : null,
            'message_success' => isset($message_success) ? $message_success : null,
            'old_values' => isset($old_values) ? $old_values : null,
            'email_error' => isset($email_error) ? $email_error : null,
        ]);
    }

    public function Formation_SSIAP1_Nice() {
       echo 'test';
    }

}