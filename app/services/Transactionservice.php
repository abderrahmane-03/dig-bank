<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/BRIEF-8/app/services/DatabaseService.php");
require_once("TransactionServiceInterface.php");

class TransactionService implements TransactionInterface{

    private $db ;


    public function __construct(Database $db){
        $this->db = $db;
    }

    
    public function getAlltransaction(){
        $fetchAllAgenciesData = "SELECT * from Transaction join adresse on Transaction.addressID = adress.addressID";
        $this->db->query($fetchAllAgenciesData);
        try{
            return $this->db->fetchMultipleRow();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }

    }
    public function getTransactionById($TransactionId){
        $TransactionData = "SELECT * from Transaction where TransactionID = :TransactionId";
        $this->db->query($TransactionData);
        $this->db->bind(":TransactionId",$TransactionId);
        try{
            return $this->db->fetchOneRow();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }

    }
    public function addTransaction(Transaction $Transaction){
    
       $addTransactionQuery = "INSERT INTO `Transaction`(`TransactionID`, `longitude`, `latitude`, `bankID`, `addressID`) VALUES (:TransactionId,:longitude,:latitude,:bankId,:adressId)" ;
       $this->db->query($addTransactionQuery);
       $this->db->bind(":TransactionId",$Transaction->getId());
       $this->db->bind(":TransactionId",$Transaction->getamount());
       $this->db->bind(":TransactionId",$Transaction->getcurrency());
       $this->db->bind(":TransactionId",$Transaction->gettype());
       
 
    
       try{
        $this->db->execute();
        echo "added";
       }
       catch(PDOException $e){
         die($e->getMessage());
       }

    }

}

?>