<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<pre>
    <?php

    print_r($_GET);
    print_r($_POST);
    ?>
</pre>
<?php if (isset($_GET['name']))
    echo "<h2>{$_GET['name']}</h2>"
?>

<form action="form.php" method="get">
    <input type="text" name="name" value="<?php if (!empty($_GET['name'])) echo $_GET['name'] ?>">
    <input type="submit" value="Send">
</form>

<form class="form-class" action="form.php" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" value="<?php if (!empty($_POST['username'])) echo $_POST['username'] ?>">
    <label for="password">Password</label>
    <input type="password" name="password" id="password" >
    <input type="submit" value="Login">
</form>
</body>
</html>