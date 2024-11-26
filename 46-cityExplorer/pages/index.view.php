<div class="container">
    <h1>List of cities:</h1>
    <ul>
        <?php foreach ($entries as $city): ?>
            <li>
                <a href="city.php?<?= http_build_query(['id' => $city->id]) ?>">
                    <?= e($city->getCityWithCountry()) ?>
                </a>
            </li>

        <?php endforeach; ?>
    </ul>
    <?php if ($pagination['page']>1): ?>
        <a href="index.php?<?= http_build_query(['page' => $pagination['page'] - 1]) ?>">Prev</a>
    <?php endif;?>
    <?php if ($pagination['page']<ceil($pagination['count']/$pagination['perPage'])): ?>
        <a href="index.php?<?= http_build_query(['page' => $pagination['page'] + 1]) ?>">Next</a>
    <?php endif;?>
</div>