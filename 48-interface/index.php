<?php
header('Content-type: text/plain');
interface Animal
{
    public function makeSound();
}

class Dog implements Animal
{
    public function makeSound(int $a=5)
    {
        echo "\nHap Hap!";
    }
}
class Cat implements Animal
{
    public function makeSound()
    {
        echo "\nmeow meow!";
    }
}
function playSound(Animal $animal)
{
    $animal->makeSound();
}
$dog=new Dog();
playSound($dog);
$cat=new Cat();
playSound($cat);

//playSound("hello");

//interface
class Horse implements Animal
{

    public function makeSound()
    {
        echo "\n ehhehehhe\n";
    }
}
$horse=new Horse();
playSound($horse);

var_dump($horse instanceof Animal);