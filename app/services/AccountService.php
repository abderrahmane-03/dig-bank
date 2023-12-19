<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/BRIEF-8/app/services/DatabaseService.php");
require_once("AccountServiceInterface.php");

class AccountService implements AccountInterface{

    private $db ;


    public function __construct(Database $db){
        $this->db = $db;
    }

    
    public function getAllAccount(){
        $fetchAllAgenciesData = "SELECT * FROM account join adresse on Account.addressID = adress.addressID";
        $this->db->query($fetchAllAgenciesData);
        try{
            return $this->db->fetchMultipleRow();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }

    }
    public function getAccountById($AccountId){
        $AccountData = "SELECT * FROM account where id = :AccountId";
        $this->db->query($AccountData);
        $this->db->bind(":AccountId",$AccountId);
        try{
            return $this->db->fetchOneRow();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }

    }
    public function addAccount(Account $Account){
      

       $addAccountQuery = "INSERT INTO `account`(`id`, `rib`, `balance`, `currency`, `user_id`) VALUES (:AccountId,:rib,:balance,:currency,:user_id)" ;
       $this->db->query($addAccountQuery);
       $this->db->bind(":AccountId",$Account->getId());
       $this->db->bind(":rib",$Account->getRib());
       $this->db->bind(":balance",$Account->getBalance());
       $this->db->bind(":currency",$Account->getCurrency());
       $this->db->bind(":user_id",$Account->getUserId());
 
    
       try{
        $this->db->execute();
        echo "added";
       }
       catch(PDOException $e){
         die($e->getMessage());
       }

    }
   
    public function deleteAccount($AccountId){
       $deleteAccount = "delete from account where id = :accountId";
       $this->db->query($deleteAccount);
       $this->db->bind(":AccountId",$AccountId);
       try{
         $this->db->execute();
       }
       catch(PDOException $e){
        die($e->getMessage());
       }
    }

}

?>