<?php

class Container
{
    private function __construct()
    {
    }

    private static ?Container $instance = null;

    public static function getInstance():self
    {
        if (empty(self::$instance))
            self::$instance = new self();
        return self::$instance;
    }

}
//$container=new Container();
//var_dump($container);
//$container2=new Container();
//var_dump($container2);

//$container=new Container();
//$container=Container::newInstance();
//var_dump($container);
//var_dump(Container::newInstance());
$container=Container::getInstance();
var_dump($container);
$container2=Container::getInstance();
var_dump($container2);