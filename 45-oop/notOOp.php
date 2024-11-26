<?php
header('Content-Type: text/plain');
$account1 = [
    'number' => '1234',
    'holder' => 'Mehdi Adeli',
    'balance' => 1250.00
];
function somehthing_account_printBalance(array $account): void
{
    echo "The balance of account {$account['number']} is {$account['balance']}\n";
}

somehthing_account_printBalance($account1);


$account2 = [
    'number' => '5678',
    'holder' => 'Ali Alavi',
    'balance' => 250.00
];
somehthing_account_printBalance($account2);

//printBalance([]);  oop
//pass by value
function account_transfer(array &$from, array &$to, float|int $amount): bool
{
//    var_dump($from);
    if ($from['balance'] < $amount)
        return false;
    $from['balance'] = $from['balance'] - $amount;
    $to['balance'] = $to['balance'] + $amount;
    return true;
//   var_dump($from);
//   var_dump($to);
}

account_transfer($account1, $account2, 50);
somehthing_account_printBalance($account1);
somehthing_account_printBalance($account2);
//pass by reference
$fakeFrom=[];
$fakeTo=[];
account_transfer($fakeFrom,$fakeTo,47);
require __DIR__.'/other.php';