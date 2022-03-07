<?php

namespace App\Form;

use App\FileUpload;

class Form extends BaseForm
{

    /**
     * Détermine si chaque champ du formulaire est valide 
     * Si un champ est invalide on renvoie dans un tableau invalid_fields[nomDuChamp] = 'Message d'erreur'
     * On conserve les old_values dans un tableau
     * @return bool
     */
    public function validate_form(): bool
    {

        /* Si le formulaire est soumis */
        if ($this->form_submit()) {

            //dd($this->posts, $_POST);

            // Depending on pages => different rules
            if ($_SERVER['REQUEST_URI'] == '/inscription' || $_SERVER['REQUEST_URI'] == '/demande-de-renseignements') {
                $this->rules_form_inscription_demande_de_renseignements($this->posts);
            }

            if ($_SERVER['REQUEST_URI'] == '/contact' || $_SERVER['REQUEST_URI'] == '/recrutement') {
                $this->rules_form_contact_recrutement($this->posts);
            }

            if ($_SERVER['REQUEST_URI'] == '/sendmail-popup') {
                $this->rules_sendmail_popup($this->posts);
            }

            /*  dd($posts, $this->invalid_fields, !count($this->invalid_fields), $this->old_values); */


            //S'il existe des fichiers à l'upload -> on vérifie s'ils sont de tailles et d'extentions valides
            if (FileUpload::upload_files_exist($this->files)) {

                FileUpload::validate_upload_files($this->files);

                /* On récupère les erreurs si elles existent => on les renvoie dans le tableau invalid_fields */
                if (FileUpload::$error_extension) {
                    $this->invalid_fields['error_extension'] = FileUpload::$error_extension;
                }

                if (FileUpload::$error_size) {
                    $this->invalid_fields['error_size'] = FileUpload::$error_size;
                }

                /* Si les erreurs n'existent pas pour les fichiers => on les mets en attentent dans le tableau post_email */
                if (!FileUpload::$error_extension && !FileUpload::$error_size) {
                    $this->post_email['files'] = $this->files['files'];
                }
            }

            // Si le tableau invalid_fields est vide => il n'y a pas d'erreurs :
            // - On envoie toutes les variables post dans une propriété tableau post_email[nomDuchamp] = 'Valeur' pour préparer le mail à l'envoi
            // - On retourne true 

            // Sinon :
            //- on retourne false

            if (!count($this->invalid_fields)) {

                foreach ($this->posts as $key => $value) {
                    $this->post_email[$key] = $value;
                }

                return true;
            } else {
                return false;
            }
        }

        // Sinon : Pas de soumission de formulaire => on retourne false 
        return false;
    }

    private function rules_form_inscription_demande_de_renseignements($posts)
    {

        /* On parcourt toutes les valeurs */
        foreach ($posts as $key => $value) {

            // Name
            if ($key == 'name') {
                if (!$value || !preg_match('#^.{' . self::MIN_LIMIT_NAME . ',' . self::MAX_LIMIT_NAME . '}$#', $value)) {
                    $this->invalid_fields['name'] = 'Votre nom n\'est pas valide ! (' . self::MIN_LIMIT_NAME . '-' . self::MAX_LIMIT_NAME . ' caractères maximum)';
                }
            }

            // Téléphone
            if ($key == 'phone') {
                if (!$value || !preg_match('#^\d{' . self::MAX_LIMIT_PHONE . '}$#', $value)) {
                    $this->invalid_fields['phone'] = 'Le numéro de téléphone n\'est pas valide ! (' . self::MAX_LIMIT_PHONE . ' chiffres obligatoires)';
                }
            }

            // Email
            if ($key == 'email') {
                if (!$value || !filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    $this->invalid_fields['email'] = 'Votre email n\'est pas valide !';
                }
            }

            // Message Non Obligatoire
            if ($key == 'message') {
                if ($value) {
                    if (!preg_match('#^.{' . self::MIN_LIMIT_MESSAGE . ',' . self::MAX_LIMIT_MESSAGE . '}$#', $value)) {
                        $this->invalid_fields['message'] = 'Votre message n\'est pas valide ! (' . self::MIN_LIMIT_MESSAGE . '-' . self::MAX_LIMIT_MESSAGE . ' caractères maximum)';
                    }
                }
            }

            $this->old_values[$key] = $value;
        }
    }

    private function rules_form_contact_recrutement($posts)
    {
        /* On parcourt toutes les valeurs */
        foreach ($posts as $key => $value) {

            // Name
            if ($key == 'name') {
                if (!$value || !preg_match('#^.{' . self::MIN_LIMIT_NAME . ',' . self::MAX_LIMIT_NAME . '}$#', $value)) {
                    $this->invalid_fields['name'] = 'Votre nom n\'est pas valide ! (' . self::MIN_LIMIT_NAME . '-' . self::MAX_LIMIT_NAME . ' caractères maximum)';
                }
            }

            // Téléphone
            if ($key == 'phone') {
                if (!$value || !preg_match('#^\d{' . self::MAX_LIMIT_PHONE . '}$#', $value)) {
                    $this->invalid_fields['phone'] = 'Le numéro de téléphone n\'est pas valide ! (' . self::MAX_LIMIT_PHONE . ' chiffres obligatoires)';
                }
            }

            // Email
            if ($key == 'email') {
                if (!$value || !filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    $this->invalid_fields['email'] = 'Votre email n\'est pas valide !';
                }
            }

            // Message Obligatoire
            if ($key == 'message') {
                if (!$value || !preg_match('#^.{' . self::MIN_LIMIT_MESSAGE . ',' . self::MAX_LIMIT_MESSAGE . '}$#', $value)) {
                    $this->invalid_fields['message'] = 'Votre message n\'est pas valide ! (' . self::MIN_LIMIT_MESSAGE . '-' . self::MAX_LIMIT_MESSAGE . ' caractères maximum)';
                }
            }

            $this->old_values[$key] = $value;
        }
    }

    private function rules_sendmail_popup($posts)
    {

        foreach ($posts as $key => $value) {

            // Téléphone
            if ($key == 'phone') {
                if (!$value || !preg_match('#^\d{' . self::MAX_LIMIT_PHONE . '}$#', $value)) {
                    $this->invalid_fields['phone'] = 'Numéro invalide ! (' . self::MAX_LIMIT_PHONE . ' chiffres)';
                }
            }

            // Name
            if ($key == 'name') {
                if ($value) {
                    if (!preg_match('#^.{' . self::MIN_LIMIT_NAME . ',' . self::MAX_LIMIT_NAME . '}$#', $value)) {
                        $this->invalid_fields['name'] = 'Votre nom est invalide ! (' . self::MIN_LIMIT_NAME . '-' . self::MAX_LIMIT_NAME . ' caractères)';
                    }
                }
            }

            // Email
            if ($key == 'email') {
                if ($value) {
                    if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                        $this->invalid_fields['email'] = 'Votre email est invalide !';
                    }
                }
            }
        }
    }
}
