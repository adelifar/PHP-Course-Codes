<?php if ($loginError): ?>
    <p>An Error has been occurred</p>
<?php endif; ?>

<form action="index.php?<?= http_build_query(['route' => 'admin/login']) ?>" method="post">
    <input type="hidden" name="_csrf" value="<?=e(csrf_token())?>">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username"
           value="<?= !empty($_POST['username']) ? e($_POST['username']) : '' ?>">

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" value="">
    <br>
    <input type="submit" value="Login">

</form>