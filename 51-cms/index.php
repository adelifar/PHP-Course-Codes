<?php
require __DIR__ . '/inc/all.php';

$container = new \App\Support\Container();
$container->bind('pdo', function () {
    return require __DIR__ . '/inc/db-connect.php';
});
$pdo = $container->get('pdo');
//var_dump($pdo);
//$pdo=$container->get('pdo');
//var_dump($pdo);
//var_dump(\App\Repository\PageRepository::class);
$container->bind(\App\Repository\PageRepository::class, function () use ($container) {
    $pdo = $container->get('pdo');
    return new \App\Repository\PageRepository($pdo);
});
$container->bind(\App\Frontend\Controller\PagesController::class, function () use ($container) {
    $repository = $container->get(\App\Repository\PageRepository::class);
    return new \App\Frontend\Controller\PagesController($repository);
});
$container->bind(\App\Frontend\Controller\NotFoundController::class, function () use ($container) {
    $repository = $container->get(\App\Repository\PageRepository::class);
    return new \App\Frontend\Controller\NotFoundController($repository);
});
$container->bind(\App\Admin\Controller\AdminPagesController::class, function () use ($container) {
    $repository = $container->get(\App\Repository\PageRepository::class);
    $authService=$container->get(\App\Admin\Support\AuthService::class);
    return new \App\Admin\Controller\AdminPagesController($authService,$repository);
});
$container->bind(\App\Admin\Controller\LoginController::class, function () use ($container) {
    $autService = $container->get(\App\Admin\Support\AuthService::class);
    return new \App\Admin\Controller\LoginController($autService);
});
$container->bind(\App\Admin\Support\AuthService::class, function () use ($container) {
    $pdo = $container->get('pdo');
    return new \App\Admin\Support\AuthService($pdo);
});
$container->bind(\App\Support\CsrfHelper::class,function (){
    return new \App\Support\CsrfHelper();
});

$csrfHelper=$container->get(\App\Support\CsrfHelper::class);
$csrfHelper->handle();
//var_dump($csrfHelper->generateToken());
function csrf_token()
{
    global $container;
    $csrfHelper=$container->get(\App\Support\CsrfHelper::class);
    return $csrfHelper->generateToken();
}

$route = @(string)($_GET['route'] ?? 'pages');
if ($route === 'pages') {
    $page = (string)($_GET['page'] ?? 'index');
//    $repository=new App\Repository\PageRepository($pdo);
//    $pageController=new App\Frontend\Controller\PagesController($repository);
    $pageController = $container->get(\App\Frontend\Controller\PagesController::class);
    $pageController->showPage($page);
}
elseif (str_starts_with($route,'admin/pages')){
    handleAdminRoute($route,$container);
}
elseif ($route === 'admin/login') {
    $loginController = $container->get(\App\Admin\Controller\LoginController::class);
    $loginController->login();
}
elseif ($route === 'admin/logout') {
    $loginController = $container->get(\App\Admin\Controller\LoginController::class);
    $loginController->logout();
}
else {
//    $repository=new App\Repository\PageRepository($pdo);
//    $notFoundController=new App\Frontend\Controller\NotFoundController($repository);
    $notFoundController = $container->get(\App\Frontend\Controller\NotFoundController::class);
    $notFoundController->error404();
}


function handleAdminRoute(string $route, \App\Support\Container $container):void
{
    $authService = $container->get(\App\Admin\Support\AuthService::class);
    $authService->ensureLoggedIn();
    if ($route === 'admin/pages') {

        $adminController = $container->get(\App\Admin\Controller\AdminPagesController::class);
        $adminController->index();
    } elseif ($route === 'admin/pages/create') {

        $adminController = $container->get(\App\Admin\Controller\AdminPagesController::class);
        $adminController->create();
    } elseif ($route === 'admin/pages/delete') {

//    $id=@(int)($_GET['id']??0);
        $adminController = $container->get(\App\Admin\Controller\AdminPagesController::class);
//    $adminController->delete($id);
        $adminController->delete();
    } elseif ($route === 'admin/pages/edit') {

        $adminController = $container->get(\App\Admin\Controller\AdminPagesController::class);
        $adminController->edit();
    }
}










//
//
//$page = (string)($_GET['page'] ?? 'index');
//if ($page === 'index' || $page==='about-us'){
//    $repository=new App\Repository\PageRepository($pdo);
////   $model= $repository->fetchBySlug('index');
//
//
//    $pageController=new \App\Frontend\Controller\PagesController($repository);
//    $pageController->showPage($page);
//}
////elseif ($page==='about-us'){
////    $repository=new App\Repository\PageRepository($pdo);
////
////    $pageController=new \App\Frontend\Controller\PagesController($repository);
////    $pageController->showPage('about-us');
////}
//
////    echo "Here will be index page";
//else {
////    (new App\Frontend\Controller\NotFoundController())->error404();
//    $notFoundController=new App\Frontend\Controller\NotFoundController();
//    $notFoundController->error404();
//}