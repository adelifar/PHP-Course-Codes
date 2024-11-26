<?php
header('Content-Type: text/plain; charset=utf-8');
class Animal
{
    public function __construct(protected int $weight)
    {

    }

    public int $age = 12;

    public function move()
    {
        echo "Animal move method has been called\n";
    }

    public function eat()
    {
//        echo "Animal eat method has been called\n";
        echo "Animal eat method has been called {$this->breed} and weight:{$this->weight}\n";
    }
}
class Dog extends Animal
{
    public function __construct(public string $breed,int $weight)
    {
        parent::__construct($weight);
    }

    public function bark()
    {
        echo "Dog bark method has been called {$this->breed} and weight:{$this->weight}\n";
    }

    #[\Override]
    public function move() //override
    {
        echo "Dog move method has been called\n";
    }
}
$dog=new Dog("Bulldog",15);
$dog->bark();
$animal=new Animal(18);
$animal->eat();
$dog->eat();
//$dog->weight=40000;