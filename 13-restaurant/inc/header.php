<!doctype html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>اصغر اردک <?php if (!empty($title)): ?>&bull; <?= $title ?><?php endif; ?> </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body dir="rtl">
<?php
$headerImage = 'images/header1.jpg';
if (!isset($key))
    $key='';
if (!empty($image))
    $headerImage = $image;
?>
<header style="background-image: url(<?= $headerImage ?>);">
    <h1>رستوران اصغر اردک</h1>
    <p>طعمی به یاد ماندنی و همیشگی</p>
    <nav>
        <?php //if (!empty($key) && $key == 'mission'): ?>
        <?php if ( $key == 'mission'): ?>
            <a class="active" href="ourMission.php">ماموریت ما</a>
        <?php else: ?>
            <a href="ourMission.php">ماموریت ما</a>
        <?php endif; ?>
        <a <?php if ( $key === 'ingredient'): ?>class="active" <?php endif; ?> href="ingredients.php">مواد
            اولیه</a>
        <a <?php if ( $key === 'menu'): ?>class="active" <?php endif; ?> href="menu.php">منو</a>
    </nav>
</header>
<main>