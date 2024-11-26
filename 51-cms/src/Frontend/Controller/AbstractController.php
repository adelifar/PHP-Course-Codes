<?php
namespace App\Frontend\Controller;
use App\Repository\PageRepository;

abstract class  AbstractController
{
    public function __construct(protected PageRepository $repository)
    {

    }
    protected function render($view,$params)
    {
        extract($params);
        ob_start();
        require __DIR__.'/../../../views/frontend/'.$view.'.view.php';
        $navigation=$this->repository->fetchForNavigation();
        $content = ob_get_clean();
        require __DIR__.'/../../../views/frontend/layouts/main.view.php';
    }
    protected function error404():void
    {
        http_response_code(404);
//        echo "This is an error page (page not found) from controller";
        $this->render('abstract/error404',[]);
    }
}