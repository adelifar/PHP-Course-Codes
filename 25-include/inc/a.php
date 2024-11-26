<?php
var_dump("This is a message from inc/a.php");
var_dump(__DIR__);
include (__DIR__."/../b.php");

var_dump(__FILE__);

require_once __DIR__.'/function.inc.php';