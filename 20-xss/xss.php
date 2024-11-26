<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../19-form/style.css">
</head>
<body>
<pre><?php
//    print_r($_POST)
//    var_dump();
    if (!empty($_POST['firstname'])) echo htmlspecialchars( $_POST['firstname'],ENT_QUOTES,'UTF-8')
    ?></pre>
<form action="xss.php" method="post" class="form-class">
    <input type="text" name="firstname" value="<?php if (!empty($_POST['firstname'])) echo htmlspecialchars( $_POST['firstname'],ENT_QUOTES,'UTF-8')?>">
    <input type="submit" value="Send!">
</form>
</body>
</html>
