<?php
require_once __DIR__.'/inc/functions.php';
include_once __DIR__ . '/views/header.inc.php';

?>

<?php
$citiesFileContent = file_get_contents(__DIR__ . '/data/cities.json');
//var_dump($citiesFileContent);
$cities = json_decode($citiesFileContent,true);
//var_dump($cities);
?>
<ul>
    <?php
    foreach ($cities as $currentCity):
    ?>

    <li>
    <a href="city.php?<?=http_build_query(['city'=>$currentCity['city']])?>"   > <?php echo e("{$currentCity['city']} - {$currentCity['Province']}")?></a>
    </li>
    <?php endforeach;?>
</ul>


<?php
include_once __DIR__ . '/views/footer.inc.php';
?>