<?php


interface BankInterface {
    public function getAllBank();
    public function getBankById($BankId);
    public function addBank(Bank $Bank);
    
}


?>