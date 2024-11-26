<?php

namespace App\Support;
class CsrfHelper
{
    public function handle()
    {
//        var_dump("Csrf handle call");
        $this->ensureSession();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!empty($_POST['_csrf']) && $_POST['_csrf'] === $_SESSION['csrfToken']){
                unset($_SESSION['csrfToken']);
                return;
            }

            http_response_code(419);
//            var_dump($_POST);
//            var_dump($_SESSION);
            die("Error: CSRF token mismatch");
        }
    }

    public function generateToken(): string
    {
        $this->ensureSession();

        if (empty($_SESSION['csrfToken'])) {
            $token = bin2hex(random_bytes(16));

            $_SESSION['csrfToken'] = $token;
        }
        return  $_SESSION['csrfToken'];
    }

    private function ensureSession()
    {
        if (session_id() === '')
            session_start();
    }
}
