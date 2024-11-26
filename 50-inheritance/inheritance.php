<?php
header('Content-Type: text/plain; charset=utf-8');

class Animal
{
    public function __construct(public int $weight)
    {

    }

    public int $age = 12;

    public function move()
    {
        echo "Animal move method has been called\n";
    }

    public function eat()
    {
        echo "Animal eat method has been called\n";
    }
}

$animal = new Animal(15);
$animal->move();
$animal->eat();

class Dog extends Animal
{
    public function __construct(int $weight)
    {
//        $this->weight = 10;
//        parent::__construct(14);
        parent::__construct($weight);
    }

    public function bark()
    {
        echo "Dog bark method has been called\n";
    }

    #[\Override]
    public function move() //override
    {
        echo "Dog move method has been called\n";
    }
}

$dog = new Dog(52);
$dog->move();
$dog->eat();
$dog->bark();
//$animal->bark();
var_dump($dog);
var_dump($animal);
$dog->move();
var_dump($dog->age);