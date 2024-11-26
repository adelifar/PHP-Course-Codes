<pre>
<?php
function e($value)
{
    return htmlspecialchars($value, ENT_QUOTES,'UTF-8');
}
echo $_SERVER['HTTP_USER_AGENT'];
print_r($_SERVER);;
//127.0.0.1  ::1
?>
</pre>
<form method="post" action="<?=e($_SERVER['PHP_SELF'])?>">
    <input type="text" name="name">
    <input type="submit" name="submit " value="send">

</form>