<?php
header("Content-type: text/plain; charset=utf-8");
class PostsRepository
{
    public function __construct(
        private string $a,
        private string $b
    )
    {

    }

}
$postRepository=new PostsRepository('A','B');

class PostController
{
    public function __construct(
        private PostsRepository $repository
    )
    {

    }
}
$repository=new PostsRepository('A','B');
$controller=new PostController($repository);

//container pattern
//pattern
class PostContainer
{
    public function getPostRepository():PostsRepository
    {
        return new PostsRepository('A','B');
    }
    public function getPostController()
    {
//        $repository=new PostsRepository()  ->>>repository
        $repository=$this->getPostRepository();
        return new PostController($repository);

//        return new PostController($this->getPostRepository());
    }
}


$container=new PostContainer();
$repository2=$container->getPostRepository();
//var_dump($repository);
//var_dump($repository2);
$controller2=$container->getPostController();
var_dump($controller2);
