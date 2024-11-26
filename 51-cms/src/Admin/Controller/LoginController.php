<?php

namespace App\Admin\Controller;

use App\Admin\Support\AuthService;

class LoginController extends AbstractController
{
    public function __construct(protected AuthService $authService)
    {

    }

    public function login():void
    {
        if ($this->authService->isLoggedIn()){
            header('Location: index.php?' . http_build_query(['route' => 'admin/pages']));
            return;
        }

        $loginError = false;
//       var_dump("LoginController login");

//       var_dump(password_hash('secret',PASSWORD_DEFAULT));
//       var_dump($_POST);
        if (!empty($_POST)) {
            $username = @(string)($_POST['username'] ?? '');
            $password = @(string)($_POST['password'] ?? '');
            if (!empty($username) && !empty($password)) {
                if ($this->authService->handleLogin($username, $password))
                    header('Location: index.php?' . http_build_query(['route' => 'admin/pages']));
                else $loginError = true;
            } else $loginError = true;
        } else $loginError = true;
        $this->render('login/login', [
            'loginError'=>$loginError
        ]);
    }
    public function logout():void
    {
        $this->authService->logout();
        header('Location: index.php?' . http_build_query(['route' => 'admin/pages']));
    }
}
