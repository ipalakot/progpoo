<?php

class BankAccount{

    public $accountnumber;
    public $balance = 0;

    public function __construct($accountnumber){
        $this->accountnumber=$accountnumber;
    }

    public function setBalance($balance){
        if($balance < 10000){
            throw new Exception("Balance trop petite");
        }
        $this->balance = $balance;
    }

    public function getBalance(){
        return $this->balance * 100;
    }
}

$comptebancaireCl1 = new BankAccount("1234567890");
$comptebancaireCl1->setBalance(1000000);
echo $comptebancaireCl1->accountnumber;
echo $comptebancaireCl1->balance;
; 
