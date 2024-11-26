<?php
header("Content-type: text/plain; charset=utf-8");

class PostsRepository
{
    public function __construct(private string $a, private string $b)
    {
        var_dump("Repository  has been constructed");
    }
}

class PostController
{
    public function __construct(private PostsRepository $repository)
    {
    }
}

class PostContainer
{
    private array $instances = [];
    private array $recipes = [];

    public function bind(string $what,Closure $recipe):void
    {
        $this->recipes[$what]=$recipe;
    }



    public function get($cl)
    {
        if (empty($this->instances[$cl])) {
            if (empty($this->recipes[$cl])) {
                echo "Could not create object of class $cl";
                die();
            }
            $this->instances[$cl] = $this->recipes[$cl]();
        }
        return $this->instances[$cl];

    }

}

$container = new PostContainer();

$container->bind('PostRepository',function () {
    return new PostsRepository('A', 'B');
});
$container->bind('PostController',function () use($container) {
    return new PostController($container->get('PostRepository'));
});




//$container->recipes['PostRepository'] = function () {
//    return new PostsRepository('A', 'B');
//};
//$container->recipes['PostController'] = function () use($container) {
//    return new PostController($container->get('PostRepository'));
//};



$repository = $container->get('PostRepository');
var_dump($repository);
$controller = $container->get('PostController');
var_dump($controller);
$controller2 = $container->get('PostController');
var_dump($controller2);