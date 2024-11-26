<?php
header('Content-Type: image/jpeg');
header('Content-Disposition: attachment; filename=image.jpg');
header('Content-Length: '.filesize(__DIR__.'/800.jpeg'));

//echo file_get_contents(__DIR__.'/1.jpg');
//if (rand(1,2)===1)
//readfile(__DIR__.'/1.jpg');
//else
//    readfile(__DIR__.'/800.jpeg');

readfile(__DIR__.'/800.jpeg');