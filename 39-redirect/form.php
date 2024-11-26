<?php
//var_dump($_SERVER);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['terms'])) {
        header('Location: thanks.html');
        die();
    } else {
        $termError = true;
    }
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
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form class="form-class" method="post" action="<?= $_SERVER['PHP_SELF'] ?>">

    <label for="name">Your name</label>
    <input type="text" name="name" id="name">

    <label for="email">Your Email</label>
    <input type="email" name="email" id="email">

    <input type="checkbox" name="terms" id="term">I accept the terms
    <?php if (!empty($termError)):
        ?>
        <p style="color:darkred">You should accept the terms</p>
    <?php endif; ?>
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>
