<?php

namespace App\Form;

abstract class BaseForm
{
    public $old_values = [];
    public $invalid_fields = [];
    public $post_email = [];
    protected $posts = [];
    protected $files = [];

    const MIN_LIMIT_MESSAGE = '1';
    const MAX_LIMIT_MESSAGE = '500';
    const MIN_LIMIT_NAME = '3';
    const MAX_LIMIT_NAME = '40';
    const MAX_LIMIT_PHONE = '10';

    /**
     * - Détermine si le formulaire est soumis
     * - Apporte la protection CSRF
     * - Stocke les valeurs $_POST
     * - Stocke les valeurs $_FILES
     * @return bool
     */
    public function form_submit(): bool
    {
        if (!empty($_POST['submit'])) {
            $this->verify_csrf();
            $this->stock_safe_post();
            $this->stock_files();
            return true;
        } else {
            return false;
        }
    }

    /**
     * Csrf protection
     * - Start session
     * - Verify if token post is equal to the token in session
     * - Check the expiry of token
     * @return bool
     */
    private function verify_csrf(): void
    {
        //Start session
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // If token post is equal to the token in session
        if ($_POST['_token'] === $_SESSION['_token']) {
            //Check expiry
            // If time is bigger than expiry => error page with status
            if (time() >= $_SESSION['token_expiry']) {
                ob_start();
                $error_status = 401;
                $error_message = 'Your session has expired, please proceed again...';
                $content = ob_get_clean();
                require_once VIEW_PATH . 'layouts/error.php';
                die;
            }
            //Else Error Page
        } else {
            ob_start();
            $error_status = 401;
            $error_message = 'Unauthorized action';
            $content = ob_get_clean();
            require_once VIEW_PATH . 'layouts/error.php';
            die;
        }
    }

    /**
     * Store $_POST variables in property
     * - securise HTML and trim values
     * @return bool
     */
    private function stock_safe_post() {
        $posts = $_POST;

        foreach($posts as $key => $value) {
            $this->posts[$key] = trim(htmlentities($value));
        }
    }

    private function stock_files() {
        $this->files = $_FILES;
    }
}
