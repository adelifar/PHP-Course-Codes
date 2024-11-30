<?php
header('Content-Type: text/plain');
//function edit($user,$title)
//{
//    //check something
//    if ($user!=='admin')
//        return null;
//    if (strlen($title)<3)
//        return null;
//}
//var_dump(edit('Mehdi','Hello'));
//var_dump(edit('admin','hi'));


function edit($user, $title)
{
    //check something
    if ($user !== 'admin')
        throw new UserNotAdminException();
    if (strlen($title) < 3)
        throw new TitleTooShortException();
}


class UserNotAdminException extends Exception
{
}

class TitleTooShortException extends Exception
{
}

//try {
////var_dump(edit('Mehdi','Hello'));
//    var_dump(edit('admin','hi'));
//    echo '===========';
//}catch (TitleTooShortException $e){
//    var_dump($e);
//    var_dump($e->getMessage());
//}
//catch (UserNotAdminException $e){
//    var_dump($e->getMessage());
//}


try {
    $file = fopen(__DIR__ . '/exception.php', 'r');
    edit('Mehdi', 'title1');
    echo '===========';
    fclose($file);
} catch (UserNotAdminException $e) {
    echo "User is not admin";
} finally {
    if (!empty($file))
        fclose($file);
}