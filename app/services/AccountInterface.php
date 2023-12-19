<?php


interface accountInterface {
    public function getAllAccount();
    public function getAccountById($AccountId);
    public function addAccount(Account $Account, $adress);
    public function deleteAccount($AccountId);
}


?>