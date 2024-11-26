<?php
session_start();
//session
//$_SESSION['counter']=5;
//$_SESSION['name']='Mehdi Adeli';
var_dump($_SESSION);

//session_destroy();
session_regenerate_id();
