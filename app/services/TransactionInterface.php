<?php


interface TransactionInterface {
    public function getAlltransaction();
    public function gettransactionById($TransactionId);
    public function addtransaction(Transaction $Transaction);
    
}


?>