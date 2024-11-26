<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CMS Project</title>
    <link rel="stylesheet" href="./styles/simple.css">
    <link rel="stylesheet" href="./styles/custom.css">
</head>
<body>
<header>
    <h1>
        <a href="index.php">CMS Project</a>
    </h1>
    <p>An incredible CMS system</p>
    <nav>

        <!--        <a href="index.php?page=index">Main page</a>-->
        <!--        <a href="index.php?page=about-us">About us</a>-->
        <?php foreach ($navigation as $navPage): ?>
            <a href="index.php?<?= http_build_query(['page' => $navPage->slug]) ?>"
                <?php if (!empty($page) && !empty($page->id) && $navPage->id === $page->id): ?>
                    class="active"
                <?php endif; ?>
            >
                <?= e($navPage->title) ?>
            </a>
        <?php endforeach; ?>
    </nav>
</header>
<main>
    <?= $content ?>
</main>
<footer>

</footer>
</body>
</html>