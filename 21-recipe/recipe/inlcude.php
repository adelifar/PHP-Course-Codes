<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recipe</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
$selectedPage = '';
if (!empty($_GET['page']))
    $selectedPage = $_GET['page'];

$pages = [
    "ghorme-sabzi" => 'قرمه سبزی',
    'gheymeh' => 'خورشت قیمه',
    'loobia-polo' => 'لوبیا پلو'
];
?>
<main class="container">
    <form class="form-class" action="inlcude.php" method="get">
        <select name="page">
            <option value="">لطفا انتخاب کنید</option>
            <!--            <option value="gheymeh" -->
            <?php //echo($selectedPage === 'gheymeh' ? 'selected' : '') ?><!-->خورشت قیمه</option>-->
            <!--            <option value="ghorme-sabzi" -->
            <?php //echo($selectedPage === 'ghorme-sabzi' ? 'selected' : '') ?><!-->قرمه سبزی-->
            <!--            </option>-->
            <!--            <option value="loobia-polo" -->
            <?php //echo($selectedPage === 'loobia-polo' ? 'selected' : '') ?><!-->لوبیا پلو-->
            <!--            </option>-->
            <?php foreach ($pages as $key => $value): ?>
                <option
                        value="<?= htmlspecialchars($key, ENT_QUOTES, 'UTF-8') ?>"
                    <?php echo($selectedPage === $key ? 'selected' : '') ?>>
                    <?= htmlspecialchars($value, ENT_QUOTES, 'UTF-8') ?>
                </option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="انتخاب">
    </form>
    <?php
    //    $pages = [
    //        'ghorme-sabzi',
    //        'gheymeh',
    //        'loobia-polo'
    //    ];
    if (!empty($selectedPage) && !empty($pages[$selectedPage]))
               echo file_get_contents("$selectedPage.html");
    ?>
</main>
</body>
</html>