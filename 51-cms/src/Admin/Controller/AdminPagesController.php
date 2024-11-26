<?php

namespace App\Admin\Controller;

use App\Admin\Support\AuthService;
use App\Model\PageModel;
use App\Repository\PageRepository;

class AdminPagesController extends AbstractController
{
    public function __construct(
        AuthService $authService,
        private PageRepository $repository)
    {
        parent::__construct($authService);
    }

    public function index(): void
    {
        $pages = $this->repository->getPages();
//        var_dump("Admin page controller in Admin area");
        $this->render('pages/index', [
            'pages' => $pages
        ]);
//        $this->error404();
    }

    public function create(): void
    {
        $errors = [];
        if (!empty($_POST)) {
//            var_dump($_POST);
//            $title=@(string)($_POST['title']??'');
//            $slug=@(string)($_POST['slug']??'');
//            $content=@(string)($_POST['content']??'');
            $model = new PageModel();
            $model->content = (@(string)($_POST['content'] ?? ''));
            $model->title = (@(string)($_POST['title'] ?? ''));
            $model->slug = (@(string)($_POST['slug'] ?? ''));


            $model->slug = $this->cleanupSlug($model->slug);


            if (!empty($model->title) && !empty($model->slug) && !empty($model->content)) {
                if (is_null($this->repository->fetchBySlug($model->slug))) {
                    $this->repository->create($model);
                    header('Location: index.php?route=admin/pages');
                } else
                    $errors[] = 'Slug already exists';
            } else {
                $errors[] = 'Are all fields filled out?';
            }
        }
        $this->render('pages/create', [
            'errors' => $errors
        ]);
    }

    public function delete()
    {

//        var_dump("The page# $id is going to be deleted");
        $id = @(int)($_POST['id'] ?? 0);

        if (!empty($id))
            $this->repository->delete($id);
        header('Location: index.php?route=admin/pages');
    }

    public function edit()
    {
        $errors = [];
        $id = @(int)($_GET['id'] ?? 0);
        if (!empty($_POST)) {
            $model = new PageModel();
            $model->id = $id;
            $model->title = @(string)($_POST['title'] ?? '');
            $model->content = @(string)($_POST['content'] ?? '');
            if (!empty($model->title) && !empty($model->content)) {
                $this->repository->updateTitleAndContent($model);
                header('Location: index.php?route=admin/pages');
                return;
            } else {
                $errors[] = 'You should fill all of fields';
            }
        }


        $page = $this->repository->fetchById($id);
        $this->render('pages/edit', [
            'page' => $page,
            'errors' => $errors
        ]);
    }


    private function cleanupSlug(string $slug): string
    {
        $slug = strtolower($slug);
        $slug = str_replace(['/', ' ', '.'], ['-', '-', '-'], $slug);
        $slug = preg_replace('/[^a-z0-9\-]/', '', $slug);
        return $slug;
    }

}