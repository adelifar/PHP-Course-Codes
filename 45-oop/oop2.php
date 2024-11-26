<?php
declare(strict_types=1);
header('Content-type: text/plain');

class BankAccount
{
//    public string $number;
//    public string $holder;
//    public float $balance;
//
//    function __construct($nr,$hld,$blnc)
//    {
////        echo "****|\n";
//        $this->balance=$blnc;
//        $this->number=$nr;
//        $this->holder=$hld;
//    }

    public function __construct(private string $number, private string $holder, private float $balance)
    {
        $this->balance = max(0, $this->balance);
    }

    public function printBalance(): void
    {
        echo "The balance of account {$this->number} is {$this->balance}\n";

    }

    public function transfer(BankAccount $to, float|int $amount): bool
    {
        if ($this->balance < $amount)
            return false;
        $this->balance -= $amount;
        $to->balance += $amount;
        return true;
    }

    public function getHolder(): string
    {
        return $this->holder;
    }

    private function setHolder(string $h): void
    {
        if (strlen($h) === 0)
            return;
        $this->holder = $h;
    }
}

$account1 = new BankAccount("1234", 'Mehdi', 150);
$account1->printBalance();
$account2 = new BankAccount("456", 'Hasan', 100);
$account1->transfer($account2, 75);
$account1->printBalance();
$account2->printBalance();
//$account2->balance = 10000;
$account2->printBalance();
//echo $account2->holder;
echo $account2->getHolder();
//encapsulation



