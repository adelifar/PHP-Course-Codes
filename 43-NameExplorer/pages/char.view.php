<div class="container">
    <ul>
        <?php foreach ($names as $name): ?>
            <li><a href="name.php?<?= http_build_query(['name' => $name]) ?>"> <?= e($name) ?></a></li>
        <?php endforeach; ?>
    </ul>

    <?php for ($i = 1; $i <= ceil(($pagination['count'] / $pagination['perPage'])); $i++):
        ?>
        <a class="button" href="char.php?<?= http_build_query(['char' => $char, 'page' => $i]) ?>">
            <?php if ($i === $pagination['page']): ?>
                <strong><?= e($i) ?></strong>
            <?php else: ?>
                <?= e($i) ?>
            <?php endif; ?>
        </a>
    <?php endfor; ?>
</div>
