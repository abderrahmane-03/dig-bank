<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/BRIEF-8/app/services/DatabaseService.php");
require_once("AtmServiceInterface.php");

class AtmService implements AtmInterface{

    private $db ;


    public function __construct(Database $db){
        $this->db = $db;
    }

    
    public function getAllAtm(){
        $fetchAllAgenciesData = "select * from Atm join adresse on Atm.addressID = adress.addressID";
        $this->db->query($fetchAllAgenciesData);
        try{
            return $this->db->fetchMultipleRow();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }

    }
    public function getAtmById($AtmId){
        $AtmData = "SELECT * from Atm where AtmID = :AtmId";
        $this->db->query($AtmData);
        $this->db->bind(":AtmId",$AtmId);
        try{
            return $this->db->fetchOneRow();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }

    }
    public function addAtm(Atm $Atm){
     

       $addAtmQuery = "INSERT INTO `Atm`(`AtmID`, `longitude`, `latitude`, `bankID`, `addressID`) VALUES (:AtmId,:longitude,:latitude,:bankId,:adressId)" ;
       $this->db->query($addAtmQuery);
       $this->db->bind(":AtmId",$Atm->getId());
    
       try{
        $this->db->execute();
        echo "added";
       }
       catch(PDOException $e){
         die($e->getMessage());
       }

    }
   
    public function deleteAtm($AtmId){
       $deleteAtm = "delete from Atm where AtmID = :AtmId";
       $this->db->query($deleteAtm);
       $this->db->bind(":AtmId",$AtmId);
       try{
         $this->db->execute();
       }
       catch(PDOException $e){
        die($e->getMessage());
       }
    }

}

?>