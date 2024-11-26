<?php

header('Content-Type: text/plain');

$message='Happy 30th birthday! Best wishes';
var_dump(strpos($message,30));
for ($i = 1; $i <120 ; $i++) {
    var_dump(strpos($message,$i));
}

$message='Happy 30th birthday! Best wishes  php@example.com';