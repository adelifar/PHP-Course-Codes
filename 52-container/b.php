<?php
header("Content-type: text/plain; charset=utf-8");
class PostsRepository
{
    public function __construct(private string $a, private string $b){
        var_dump("Repository  has been constructed");
    }
}
class PostController
{
    public function __construct(private PostsRepository $repository){}
}

class PostContainer
{

//
//    public function __construct()
//    {
////        $this->postsRepository=new PostsRepository()
//    }
    private PostsRepository $postsRepository;
    public function getPostRepository(): PostsRepository
    {
        if (empty($this->postsRepository))
            $this->postsRepository= new PostsRepository('A', 'B');
        return $this->postsRepository;
    }
    private PostController $postController;
    public function getPostController(): PostController
    {
        if (empty($this->postController))
            $this->postController=new PostController($this->getPostRepository());
        return $this->postController;
    }
}
$container=new PostContainer();
$repository=$container->getPostRepository();
var_dump($repository);
$controller=$container->getPostController();
var_dump($controller);
$controller2=$container->getPostController();
var_dump($controller2);
