<?php
require_once __DIR__ . '/inc/functions.php';
require_once __DIR__ . '/inc/db-connect.php';

$perPage = 2;
$page = 1;
if (!empty($_GET['page']))
    $page = (int)($_GET['page']);
if ($page < 1) $page = 1;


$statementCount = $pdo->prepare("SELECT COUNT(id) as number FROM `entries`");
$statementCount->execute();
$count = $statementCount->fetch(PDO::FETCH_ASSOC)['number'];
$numberOfPages = ceil($count / $perPage);

//page=1 offset=0
//page=2 , offset=perPage
//page=3 , offset=2*perpage
$offset = ($page - 1) * $perPage;

$statement = $pdo->prepare("SELECT * FROM `entries` ORDER BY `create_date` DESC ,id DESC limit :perPage offset :offset;");
$statement->bindValue(':perPage', $perPage, PDO::PARAM_INT);
$statement->bindValue(':offset', $offset, PDO::PARAM_INT);
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
//print_r($results);


require_once __DIR__ . '/views/header.view.php';
?>
    <h1 class="main-heading">Entries</h1>
<?php foreach ($results as $result):
    $explodedDate = explode('-', $result['create_date']);
    $timestamp = mktime(12, 0, 0, $explodedDate[1], $explodedDate[2], $explodedDate[0]);
//    var_dump($result);
    ?>
    <div class="card">
        <?php if (!empty($result['image'])): ?>
            <div class="card__image-container">
                <img class="card__image" src="uploaded/<?= e($result['image']) ?>" alt="image">
            </div>
        <?php endif; ?>
        <div class="card__description">
            <div class="card__description-time"><?= e(date('D, d M Y',$timestamp)) ?></div>
            <h2 class="card__heading"><?= e($result['title']) ?></h2>
            <p class="card__paragraph">
                <?= nl2br(e($result['message'])) ?>
            </p>
        </div>

    </div>
<?php endforeach; ?>

<?php if ($numberOfPages > 1): ?>
    <ul class="pagination">
        <?php if ($page > 1): ?>
            <li class="pagination__li"><a href="index.php?<?= http_build_query(['page' => $page - 1]) ?>"
                                          class="pagination-link"> ⏴</a></li>
        <?php endif; ?>
        <?php for ($i = 1; $i <= $numberOfPages; $i++): ?>
            <li class="pagination__li "><a href="index.php?<?= http_build_query(['page' => $i]) ?>"
                                           class="pagination-link <?= $page === $i ? 'active-link' : '' ?>"> <?= e($i) ?></a>
            </li>
        <?php endfor; ?>
        <?php if ($page < $numberOfPages): ?>
            <li class="pagination__li"><a href="index.php?<?= http_build_query(['page' => $page + 1]) ?>"
                                          class="pagination-link"> ⏵</a></li>
        <?php endif; ?>
    </ul>
<?php endif; ?>
<?php
require_once __DIR__ . '/views/footer.view.php';
?>