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
<pre>
    <?php
    $currentTime = time();
    var_dump($currentTime);
    $start = microtime(true);
    $end = microtime(true);
    var_dump($end - $start);

    var_dump(date_default_timezone_get());
    date_default_timezone_set('Asia/Tehran');
    var_dump(date_default_timezone_get());

    var_dump(date('Y-m-d H:i:s'));
    date_default_timezone_set("Europe/Berlin");
    var_dump(date('Y-m-d H:i:s'));
    date_default_timezone_set('America/New_York');
    var_dump(date('Y-m-d H:i:s'));

    var_dump(date('D, d M Y H:i:s'));
    var_dump(date('Y/M/d h:i a'));

    $year=2025;
    $month=11;
    $day=15;
    $hour=13;
    $minute=45;

    $t=mktime($hour,$minute,0,$month,$day,$year);
    var_dump($t);

    var_dump(date('Y/M/d h:i a',$t));
    var_dump($t-time());

    $str='2025-11-15 13:00:00';
    var_dump(strtotime($str));
    ?>
</pre>
</body>
</html>
