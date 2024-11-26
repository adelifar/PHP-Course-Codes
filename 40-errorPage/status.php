<?php
function e($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$id = (!empty($_GET["id"])) ? (int)$_GET["id"] : 0;

if ($id>15){
    require "notfound.php";
    die();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
if ($id > 0):
    ?>

    <h2>You have entered id: <?= e($id) ?></h2>
<?php endif; ?>
</body>
</html>
