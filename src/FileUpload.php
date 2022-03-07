<?php

namespace App;

class FileUpload
{
    public static $error_extension;
    public static $error_size;
    private static $valid_extensions = [
        'jpeg', 'png', 'docx', 'doc', 'pdf', 'vnd.openxmlformats-officedocument.wordprocessingml.document',
    ];
    const LIMIT_UPLOAD_MEMORY = 10485760; /* 10mo maximum*/

    
    /**
    * Détermine s'il existe des fichiers à l'upload
    * @return bool
    */
    public static function upload_files_exist($files): bool
    {
        if (!empty($files['files']['name'][0])) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Détermine si les fichiers à l'upload sont de tailles et d'extensions correctes
     */
    public static function validate_upload_files($files):void
    {

            /* On vérifie que les extensions sont correctes */
            foreach ($files['files']['type'] as $file_type) {
                $explode = explode('/', $file_type);
                $ext = strtolower($explode[1]);

                /* Si parmi l'un des fichiers l'extension uploadée est incorrecte => on génère une erreur */
                if (!in_array($ext, self::$valid_extensions)) {
                    self::$error_extension = 'Fichiers d\'extension non valide, extensions acceptées : PDF, DOC, DOCX, PNG, JPG';
                }
            }

            /* On vérifie que la taille totale de fichiers ne dépasse pas 10mo */
            $total_size = 0;

            foreach ($files['files']['size'] as $file_size) {
                $total_size += $file_size;
            }

            /* Si la taille dépasse la limite autorisée en mémoire => on génère une erreur */
            if ($total_size > self::LIMIT_UPLOAD_MEMORY) {
                self::$error_size = 'Votre upload doit être inférieur à 10mo';
            }
        
    }
}