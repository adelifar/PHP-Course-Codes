<?php

namespace App\Frontend\Controller;
use App\Repository\PageRepository;

class PagesController extends AbstractController
{
    public function __construct(protected PageRepository $repository)
    {

    }
    public function showPage(string $pageKey):void
    {
        $page=$this->repository->fetchBySlug($pageKey);
        if (empty($page)){
            $this->error404();
            return;
        }
//        echo "Pages controller is showing the page $pageKey";
        $this->render('pages/showPage', ['page'=>$page]);
    }
}