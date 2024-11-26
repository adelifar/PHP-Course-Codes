<?php
use Admin\User;
use Client\User as ClientUser;
require __DIR__.'/admin/Role.php';
require __DIR__.'/admin/user.php';
require __DIR__.'/client/User.php';

$client=new Client\User();
//$admin=new Admin\User();
$admin=new User();
$client=new ClientUser();

var_dump(ClientUser::class);
echo "<br>";
var_dump(User::class);
echo "<br>";
var_dump($admin::class);
echo "<br>";
var_dump($client::class);
echo "<br>";

var_dump($client instanceof ClientUser);
echo "<br>";
var_dump($admin instanceof ClientUser);