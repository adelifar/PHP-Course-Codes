<?php
namespace App\Admin\Controller;
use App\Admin\Support\AuthService;

abstract class  AbstractController
{
    public function __construct(protected AuthService $authService)
    {

    }
    protected function render($view,$params):void
    {
        extract($params);
        ob_start();
        require __DIR__.'/../../../views/admin/'.$view.'.view.php';
        $content = ob_get_clean();
        $isLoggedIn=$this->authService->isLoggedIn();
        require __DIR__.'/../../../views/admin/layouts/main.view.php';
    }
    protected function error404():void
    {
        http_response_code(404);
//        echo "This is an error page (page not found) from controller";
        $this->render('abstract/error404',[]);
    }
}