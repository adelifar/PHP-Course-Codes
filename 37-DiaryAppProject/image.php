<?php
//$dims=getimagesize(__DIR__.'/images/pexels-tranmautritam-68761.jpg');
//var_dump($dims);
//$width=$dims[0];
//$height=$dims[1];
//var_dump($width);
//var_dump($height);

const ImagePath = __DIR__ . '/images/pexels-tranmautritam-68761.jpg';
[$width,$height]=getimagesize(ImagePath);
//var_dump($width);
//var_dump($height);

$maxDim=400;
$scaleFactor=$maxDim/ max($width,$height);
//var_dump($scaleFactor);
$newWidth=$width*$scaleFactor;
$newHeight=$height*$scaleFactor;
//var_dump($newHeight);
//var_dump($newWidth);

$im=imagecreatefromjpeg(ImagePath);
//var_dump($im);

$newImage=imagecreatetruecolor($newWidth,$newHeight);
//var_dump($newImage);

imagecopyresampled($newImage,$im,0,0,0,0,$newWidth,$newHeight,$width,$height);


//header("Content-Type: image/jpeg");
imagejpeg($newImage,'newImage.jpg');

