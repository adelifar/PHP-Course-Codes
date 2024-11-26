<?php
include "include/images.inc.php";
include "views/header.php" ?>
<div class="gallery-container">
<?php foreach ($imageTitles as $src => $title): ?>

    <a href="image.php?<?=http_build_query(['image'=>$src])?>" class="gallery-item">
        <h3><?= htmlspecialchars($title, ENT_QUOTES, "UTF-8") ?></h3>
        <img src="images/<?= rawurlencode($src) ?>" alt="<?= htmlspecialchars($title, ENT_QUOTES, "UTF-8") ?>"/>
    </a>
<?php endforeach; ?>
</div>

<?php include "views/footer.php"; ?>
