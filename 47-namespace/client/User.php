<?php

namespace App\Client;
use PDO;
use App\Admin\User as AdminUser;

class User
{
    public function __construct()
    {
//        $pdo=new \PDO("mysql:host=localhost;dbname=practice", "root", "");
//        $pdo=new PDO("mysql:host=localhost;dbname=practice", "root", "");
        $admin = new AdminUser();
    }
}

