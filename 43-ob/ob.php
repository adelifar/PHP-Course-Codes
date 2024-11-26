<?php
header('Content-type: text/plain');
ob_start();
echo 'Hello world';
//ob_clean();
//ob_flush();
$contents=ob_get_clean();
var_dump($contents);

echo '--------------------------------------------------';
ob_start();
?>
<h1>Hello Mehdi Adeli</h1>
<?php
$contents=ob_get_clean();
var_dump($contents);

echo '--------------------------------------------------';
ob_start();
require __DIR__.'/view.php';
$contents=ob_get_clean();
var_dump($contents);