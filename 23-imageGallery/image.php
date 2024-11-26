<?php include 'views/header.php';
include 'include/images.inc.php';
if (!empty($_GET['image']) && !empty($imageTitles[$_GET['image']])):
$image=$_GET['image']
?>
<h2><?=htmlspecialchars( $imageTitles[$image],ENT_QUOTES,"UTF-8")?></h2>
<img src="images/<?=rawurlencode($image)?>" alt="">
<p><?=str_replace("\n","<br>", htmlspecialchars($imageDescriptions[$image],ENT_QUOTES,"UTF-8"))?></p>
<?php else:?>
<div class="notice">
    Could not find the image
</div>
<?php endif;?>
<a href="gallery.php">Back to gallery</a>
<?php include 'views/footer.php'?>
