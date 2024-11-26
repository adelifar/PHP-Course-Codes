<?php

namespace App\Repository;

use App\Model\PageModel;
use PDO;

class PageRepository
{
    public function __construct(private PDO $pdo)
    {

    }

    public function getPages(): array
    {
        $statement = $this->pdo->prepare("select * from pages order by id");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, PageModel::class);
    }

    public function fetchForNavigation(): array
    {
        return $this->getPages();
    }

    public function fetchBySlug($slug): ?PageModel
    {
//        var_dump($slug);
        $statement = $this->pdo->prepare("select * from pages where slug=:slug");
        $statement->bindValue(":slug", $slug);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, PageModel::class);
        $result = $statement->fetch();
//        var_dump($result);
        return (empty($result)) ? null : $result;
    }

    public function create(PageModel $model): bool
    {

//        if ($this->fetchBySlug($model->slug)!==null)
//            return false;
        $statement = $this->pdo->prepare("Insert into pages(title, slug,content) values (:title,:slug,:content)");
        $statement->bindValue(':title', $model->title);
        $statement->bindValue(':slug', $model->slug);
        $statement->bindValue(':content', $model->content);
        return $statement->execute();
    }

    public function delete(int $id):bool{
        $statement = $this->pdo->prepare("Delete from pages where id=:id");
        $statement->bindValue(':id', $id);
        return $statement->execute();
    }
    public function fetchById(int $id)
    {
        $statement = $this->pdo->prepare("select * from pages where id=:id");
        $statement->bindValue(":id", $id,PDO::PARAM_INT);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, PageModel::class);
        $result = $statement->fetch();
//        var_dump($result);
        return (empty($result)) ? null : $result;
    }

    public function updateTitleAndContent(PageModel $model):bool
    {
        $statement = $this->pdo->prepare("update pages set title=:title , content=:content where id=:id");
        $statement->bindValue(':title', $model->title);
        $statement->bindValue(':id', $model->id,PDO::PARAM_INT);
        $statement->bindValue(':content', $model->content);
        return $statement->execute();
    }


}