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
<body class="body-<?php echo rand(1,6) ?>">
<h1>Hello this is my first php file</h1>
<?php echo 'Hello from PHP!' ?>
<h1><?php echo 'Hello from Heading in PHP' ?> </h1>
<strong><span>A dice roll is:</span> <?php echo rand(1,6) ?></strong>
<p><span>A dice roll is:</span> <?php echo rand(1,6) ?></p>


<?php echo '<h2>Hello this heading generated by PHP</h2>' ?>
</body>
</html>