<?php
require_once __DIR__ . '/inc/functions.php';
require_once __DIR__ . '/inc/db-connect.php';
if (!empty($_POST)) {
    $title = (string)($_POST['title'] ?? '');

    $date = (string)($_POST['date'] ?? '');
    $message = (string)($_POST['message'] ?? '');

    $imageName = null;
    if (!empty($_FILES) && !empty($_FILES['image']))
        if ($_FILES['image']['error'] === 0 && $_FILES['image']['size'] > 0 && str_contains($_FILES['image']['type'], 'image')) {

            $nameWithoutExtension = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME);
            $name = preg_replace('/[^a-zA-Z0-9]/', '', $nameWithoutExtension);
            $imagePath = $_FILES['image']['tmp_name'];
            $dims = getimagesize($imagePath);
            if ($dims!==false) {
                [$width, $height] = $dims;
                var_dump($width);
                var_dump($height);
                $maxDim = 800;
                $scaleFactor = $maxDim / max($width, $height);
                $newWidth = $width * $scaleFactor;
                $newHeight = $height * $scaleFactor;
                $im = imagecreatefromjpeg($imagePath);
                if ($im!==false) {
                    $newImage = imagecreatetruecolor($newWidth, $newHeight);
                    imagecopyresampled($newImage, $im, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
                    $imageName = $name . time() . '.jpg';
                    imagejpeg($newImage, __DIR__ . '/uploaded/' . $imageName);
                }
            }
        }

    $statement = $pdo->prepare("INSERT INTO entries (title, message, create_date,image) VALUES (:title, :message, :date,:image)");
    $statement->bindValue(':title', $title);
    $statement->bindValue(':message', $message);
    $statement->bindValue(':date', $date);
    $statement->bindValue(':image', $imageName);
    $statement->execute();

    die("<a href='index.php'>Date Inserted successfully Click to continue</a>");
}


require_once __DIR__ . '/views/header.view.php';

//var_dump($_POST);
?>
    <h1 class="main-heading">New Entry</h1>
    <form method="post" action="form.php" enctype="multipart/form-data">
        <div class="form-group">
            <label class="form-group__label" for="title">Title:</label>
            <input class="form-group__input" type="text" name="title" id="title" required>
        </div>
        <div class="form-group">
            <label class="form-group__label" for="date">Date:</label>
            <input class="form-group__input" type="date" name="date" id="date" required>
        </div>
        <div class="form-group">
            <label class="form-group__label" for="image">Image:</label>
            <input class="form-group__input" type="file" name="image" id="image">
        </div>
        <div class="form-group">
            <label class="form-group__label" for="message">Message:</label>
            <textarea class="form-group__input" id="message" name="message" rows="10" required></textarea>
        </div>
        <div class="form-submit">
            <button class="button" type="submit">
                <svg class="button-icon" viewBox="0 0 34.7163912799 33.4350009649">

                    <g style="fill: none;
                               stroke: currentColor;
                               stroke-linecap: round;
                               stroke-linejoin: round;
                               stroke-width: 2px;">
                        <polygon
                                points="20.6844359446 32.4350009649 33.7163912799 1 1 10.3610302393 15.1899978903 17.5208901631 20.6844359446 32.4350009649"/>
                        <line x1="33.7163912799" y1="1" x2="15.1899978903" y2="17.5208901631"/>
                    </g>
                </svg>
                Save
            </button>
        </div>
    </form>
<?php
require_once __DIR__ . '/views/footer.view.php'
?>