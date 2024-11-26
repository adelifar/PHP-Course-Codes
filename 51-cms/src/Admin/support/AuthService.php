<?php

namespace App\Admin\Support;
class AuthService
{
    public function __construct(private \PDO $pdo)
    {

    }

    public function handleLogin(string $username, string $password): bool
    {
//        if (empty($username))return false;
//        if (empty($password))return false;
        if (empty($username) || empty($password)) return false;
        $statement = $this->pdo->prepare("select id,password from users where username=:username");
        $statement->bindValue(':username', $username);
        $statement->execute();
        $result = $statement->fetch(\PDO::FETCH_ASSOC);
        if (empty($result))
            return false;
        $hash = $result['password'];
        $verifyResult = password_verify($password, $hash);
        if (!$verifyResult)
            return false;
        $this->ensureSessionStarted();
        $_SESSION['adminUserId'] = $result['id'];
//        var_dump($result);
//        return false;
        return true;
    }

    public function logout(): void
    {
        $this->ensureSessionStarted();
        unset($_SESSION['adminUserId']);
        session_regenerate_id();
    }

    public function isLoggedIn(): bool
    {
        $this->ensureSessionStarted();
        return !empty($_SESSION['adminUserId']);
    }

    public function ensureLoggedIn(): void
    {
        if ($this->isLoggedIn())
            return;
        header('Location: index.php?' . http_build_query(['route' => 'admin/login']));
        die();
    }

    private function ensureSessionStarted(): void
    {
        if (empty(session_id())) session_start();
    }
}
