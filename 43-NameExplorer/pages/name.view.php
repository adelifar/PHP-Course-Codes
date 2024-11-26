<div class="container">
    <h1>Result for name: <?= e($name) ?></h1>
    <?php if (empty($results)): ?>
        <p>Could not find any entries!</p>
    <?php else: ?>
        <table>
            <thead
            ">
            <tr>

                <th>Year</th>
                <th>Count</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($results as $nameResult): ?>
                <tr>
                    <td><?= e($nameResult['year']) ?></td>
                    <td><?= e($nameResult['count']) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
