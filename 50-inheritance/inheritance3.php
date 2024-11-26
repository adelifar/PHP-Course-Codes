<?php
header('Content-Type: text/plain; charset=utf-8');

class Animal
{
    public function move()
    {
        echo "Animal move method has been called\n";
    }

    public function eat()
    {
        echo "Animal eat method has been called \n";
//        $this->move();
        self::move();
    }
}

class Dog extends Animal
{
    #[\Override]
    public function move() //override
    {
        echo "Dog move method has been called\n";
        $this->eat();
//        $this->move();
        parent::move();
    }
}

$dog = new Dog();
$dog->move();