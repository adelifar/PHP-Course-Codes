<?php
namespace App\Frontend\Controller;
class NotFoundController extends AbstractController
{
    public function error404():void
    {
        parent::error404();
//        http_response_code(404);
////        echo "This is an error page (page not found) from controller";
//        $this->render('notFound/error404',[]);
    }

}
