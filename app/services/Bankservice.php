<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/BRIEF-8/app/services/DatabaseService.php");
require_once("BankServiceInterface.php");

class BankService implements BankInterface{

    private $db ;


    public function __construct(Database $db){
        $this->db = $db;
    }

    
    public function getAllBank(){
        $fetchAllAgenciesData = "select * from Bank join adresse on Bank.addressID = adress.addressID";
        $this->db->query($fetchAllAgenciesData);
        try{
            return $this->db->fetchMultipleRow();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }

    }
    public function getBankById($BankId){
        $BankData = "select * from Bank where BankID = :BankId";
        $this->db->query($BankData);
        $this->db->bind(":BankId",$BankId);
        try{
            return $this->db->fetchOneRow();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }

    }
    public function addBank(Bank $Bank){

       $addBankQuery = "INSERT INTO `Bank`(`BankID`, `longitude`, `latitude`, `bankID`, `addressID`) VALUES (:BankId,:longitude,:latitude,:bankId,:adressId)" ;
       $this->db->query($addBankQuery);
       $this->db->bind(":BankId",$Bank->getId());
       $this->db->bind(":BankId",$Bank->getname());
       $this->db->bind(":BankId",$Bank->getlogo());
       
 
    
       try{
        $this->db->execute();
        echo "added";
       }
       catch(PDOException $e){
         die($e->getMessage());
       }

    }
    
    
    public function deleteBank($BankId){
       $deleteBank = "delete from Bank where BankID = :BankId";
       $this->db->query($deleteBank);
       $this->db->bind(":BankId",$BankId);
       try{
         $this->db->execute();
       }
       catch(PDOException $e){
        die($e->getMessage());
       }
    }

}

?>