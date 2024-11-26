<h1>Edit Page</h1>
<?php if (!empty($errors)): ?>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?= e($error) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<form action="index.php?<?= http_build_query(['route' => 'admin/pages/edit', 'id' => $page->id]) ?>" method="post">
    <input type="hidden" name="_csrf" value="<?=e(csrf_token())?>">
    <label for="title">Title: </label>
    <input type="text" name="title" value="<?php
    if (!empty($_POST['title']))
        echo e($_POST['title']);
    else echo e($page->title);
    ?>" id="title"


           required>


    <label for="content">Content: </label>
    <textarea name="content" id="content" rows="5"
              required><?php
        if (!empty($_POST['content'])) echo e($_POST['content']);
        else echo e($page->content);
        ?></textarea>

    <input type="submit" value="Submit">
</form>