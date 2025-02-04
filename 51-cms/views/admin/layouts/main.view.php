<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CMS Project</title>
    <link rel="stylesheet" href="http://localhost:8095/php/51-cms/styles/simple.css">
    <link rel="stylesheet" href="http://localhost:8095/php/51-cms/styles/admin.css">
    <link rel="stylesheet" href="http://localhost:8095/php/51-cms/styles/custom.css">
</head>
<body>
<header>
    <h1>
        <a href="index.php?route=admin/pages">CMS Project :: Admin</a>
    </h1>
    <p>Admin page</p>
    <nav>
        <?php if ($isLoggedIn): ?>
            <a href="index.php?<?= http_build_query(['route' => 'admin/logout']) ?>">Logout</a>
        <?php endif; ?>
    </nav>
</header>
<main>
    <?= $content ?>
</main>
<footer>

</footer>
<script src="http://localhost:8095/php/51-cms/scripts/tinymce/tinymce.min.js"></script>
<script>
  tinymce.init({
      selector:'#content',
      plugins:['autolink', 'link',  'lists', 'charmap', 'preview'],
      toolbar:'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
  'bullist numlist outdent indent | ltr rtl | link image | print preview media fullscreen | ' +
  'forecolor backcolor emoticons | help'
  })
</script>
</body>
</html>