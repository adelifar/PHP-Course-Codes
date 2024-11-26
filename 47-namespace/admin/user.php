<?php
namespace App\Admin;
//psr-4
class User
{
    public Role $role;

    public function __construct()
    {
        $this->role=new Role();
    }

}
