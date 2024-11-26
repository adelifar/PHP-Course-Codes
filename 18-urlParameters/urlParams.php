<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../09-numbers/styles.css">
</head>
<body>
<pre><?php
    print_r($_GET);
    ?></pre>
<?php
if (isset($_GET['name']))
    echo "<h2>{$_GET['name']}</h2>";
?>

<a href="urlParams.php?name=mehdi&age=18">Mehdi</a><br>
<a href="urlParams.php?name=ali&age=28">ali</a><br>
<a href="urlParams.php?name=amir&age=88">amir</a><br>

<!--<a href="urlParams.php?name=amir & hosein&age=88">amir & hosein</a><br>-->
<a href="urlParams.php?<?php echo http_build_query(['name'=>'amir & hosein','age'=>88])?>">amir & hosein</a><br>
<a href="urlParams.php?<?php echo http_build_query(['name'=>'ali','age'=>28])?>">ali</a><br>
</body>
</html>