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
var_dump($_POST);
var_dump($_FILES);
if (!empty($_FILES) && !empty($_FILES['image']))
    if ($_FILES['image']['error'] === 0 && $_FILES['image']['size'] > 0 && str_contains( $_FILES['image']['type'],'image')) {
        $nameWithoutExtension=pathinfo($_FILES['image']['name'],PATHINFO_FILENAME);
        $name=preg_replace('/[^a-zA-Z0-9]/','',$nameWithoutExtension);
        $imagePath=$_FILES['image']['tmp_name'];
        [$width,$height]=getimagesize($imagePath);
//var_dump($width);
//var_dump($height);

        $maxDim=800;
        $scaleFactor=$maxDim/ max($width,$height);
//var_dump($scaleFactor);
        $newWidth=$width*$scaleFactor;
        $newHeight=$height*$scaleFactor;
//var_dump($newHeight);
//var_dump($newWidth);

        $im=imagecreatefromjpeg($imagePath);
//var_dump($im);

        $newImage=imagecreatetruecolor($newWidth,$newHeight);
//var_dump($newImage);

        imagecopyresampled($newImage,$im,0,0,0,0,$newWidth,$newHeight,$width,$height);


//header("Content-Type: image/jpeg");
        imagejpeg($newImage,__DIR__ . '/uploaded/' .$name. time() . '.jpg');


//        move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . '/uploaded/' .$name. time() . '.jpg');
    }
?>
    </pre>
<form method="post" action="upload.php" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>