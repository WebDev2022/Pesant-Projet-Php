<?php

namespace App\Controllers;

class Controller
{
    static $expiry_time_token = 1800;

    /**
     * Keep in memory the content of files in the $content variable
     * Extract variables for Controllers
     * Require layouts default
     */
    public static function render($view, ?array $variables = null)
    {
        ob_start();

        self::generate_csrf_token();

        if (!empty($variables)) {
            extract($variables);
        }

        require VIEW_PATH . DIRECTORY_SEPARATOR . $view . '.php';
        $content = ob_get_clean();

        require VIEW_PATH . DIRECTORY_SEPARATOR . 'layouts/application.php';
    }

    private static function generate_csrf_token(): void
    {
        //Start session
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        //If $_SESSION['_token'] exists
        //- unset $_SESSION['_token']
        //- create new $_SESSION['_token']
        if (isset($_SESSION['_token'])) {
            unset($_SESSION['_token']);
            $_SESSION['_token'] = bin2hex(openssl_random_pseudo_bytes(16));
        //Else
        //- create new $_SESSION['_token']
        } else {
            $_SESSION['_token'] = bin2hex(openssl_random_pseudo_bytes(16));
        }

        //If $_SESSION['token_expiry'] exists
        //- unset $_SESSION['token_expiry']
        //- create new $_SESSION['token_expiry'] for 30 minutes
        if (isset($_SESSION['token_expiry'])) {
            unset($_SESSION['token_expiry']);
             $_SESSION['token_expiry'] = time() + self::$expiry_time_token;
        } else {
             $_SESSION['token_expiry'] = time() + self::$expiry_time_token;
        }
    }
}
