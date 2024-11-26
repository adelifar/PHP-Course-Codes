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
<pre>
    <?php
    $categories = array('programming', 'business', 'design', 'self improvement', 'history', 'sport');
    foreach ($categories as $category) {
//        var_dump($category);
        //continue break
//        if ($category !== 'design' && $category!=='history')
//            echo $category . "\n";
//        if ($category === 'design') continue;
//        if ($category == 'history') continue;
        if ($category === 'history') break;
        echo $category . "\n";
    }
    ?>
    </pre>
<ul>
    <?php foreach ($categories as $category) { ?>
        <li>
            <?= $category ?>
        </li>
    <?php } ?>
</ul>
<select>
    <?php foreach ($categories as $category) { ?>
        <option>
            <?= $category ?>
        </option>
    <?php } ?>
</select>
<select>
    <?php foreach ($categories as $category): ?>
        <option>
            <?= $category ?>
        </option>
    <?php endforeach; ?>
</select>

</body>
</html>
