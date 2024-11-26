<div class="container">
    <ol>
        <?php foreach ($names as $name): ?>
            <li>
                <a href="name.php?<?= http_build_query(['name' => $name['name']]) ?>">
                    <?= $name['name'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ol>
</div>