<h1>Create new Page</h1>
<?php if (!empty($errors)): ?>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?= e($error) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<form action="index.php?route=admin/pages/create" method="post">
    <input type="hidden" name="_csrf" value="<?=e(csrf_token())?>">
    <label for="title">Title: </label>
    <input type="text" name="title" value="<?php if (!empty($_POST['title'])) echo e($_POST['title']) ?>" id="title"
           required>

    <label for="title">Slug: </label>
    <input type="text" name="slug" value="<?php if (!empty($_POST['slug'])) echo e($_POST['slug']) ?>" id="slug"
           required>

    <label for="content">Content: </label>
    <textarea name="content" id="content" rows="5"
              required><?php if (!empty($_POST['content'])) echo e($_POST['content']) ?></textarea>

    <input type="submit" value="Add">
</form>