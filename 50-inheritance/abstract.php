<?php
header('Content-Type: text/plain; charset=utf-8');

abstract class Animal
{
    public abstract function getWeight(): int;

    public function move()
    {
        echo "Animal move method has been called\n";
    }

    public function eat()
    {
        echo "Animal eat method has been called {$this->getWeight()}  \n";

    }
}

class Dog extends Animal
{
    public function getWeight(): int
    {
        return 15;
    }
}

//$animal=new Animal();
$dog = new Dog();
$dog->eat();

class Cat extends Animal
{
    public function getWeight(): int
    {
        return 7;
    }
}

$cat = new Cat();
$cat->eat();