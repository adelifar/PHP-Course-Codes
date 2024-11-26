<?php
declare(strict_types=1);
header('Content-Type: text/plain');
class BankAccount
{
    public string $number;
    public string $holder;
    public float $balance=0;
//    public $something;

    function printBalance():void  //method
    {
        echo "The balance of account {$this->number} is {$this->balance}\n";
    }
}
$account1=new BankAccount();
$account1->number='1234';
$account1->holder='John Doe';
$account1->balance=100;
//var_dump($account1);


$account1->printBalance($account1);
//printBalance([
//    'number' => '1234',
//    'holder' => 'Mehdi Adeli',
//    'balance' => 1250.00
//]);
//$account1->something=true;
var_dump($account1);
$account2=new BankAccount();
//var_dump($account2);
//var_dump($account2->number);
//$account2->number=1324;
var_dump($account2);
$account1->printBalance();
$account2->balance=150;
$account2->number="741";
$account2->holder="Mehdi";
$account2->printBalance();

$a=$account2;
var_dump($a);
$a->printBalance();
