<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../09-numbers/styles.css">
    <style>h1 {
            height: 5rem;
            background-color: lightgrey;
        }</style>
</head>
<body>
<pre><?php
    $name = 'Mehdi Adeli';
    var_dump(isset($name));

    ?></pre>
<?php
if (isset($name))
    echo "<h1>The variable exists</h1>";
?>

<pre><?php
    $name = '';
    var_dump($name);
    var_dump(empty($name));

    if (isset($name) && $name === '') {
        echo "The variable is Empty";
    }


    ?>

</pre>
<?php
if (!empty($name)) {
    echo "<h1>$name</h1>";
}
$name = '0';
var_dump(empty($name));

unset($name);
if (isset($name)) echo 'the variable exits';
var_dump(isset($name));
var_dump(empty($name));;
?>
<br>
<?php
$name = 'Mehdi Adeli';
if (isset($name)) {
    echo "<h1><span>$name</span></h1>";
}
?>
<?php
if (isset($name)) { ?>
    <h1>
        <span>
            <?php echo $name ?>
        </span>
    </h1>
<?php } ?>

<?php
if (isset($name)):?>
    <h1>
        <span>


            <?php echo $name ?>
        </span>
    </h1>
<?php endif; ?>
<?php
if (isset($name)):?>
    <h1>
        <span>
            <?=$name ?>
        </span>
    </h1>
<?php endif; ?>

</body>
</html>