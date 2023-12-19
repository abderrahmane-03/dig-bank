<?php

// require_once($_SERVER["DOCUMENT_ROOT"]."/BRIEF-8/app/services/DatabaseService.php");
require_once("AgencyServiceInterface.php");
require_once("DatabaseService.php");


class AgencyService implements AgencyServiceInterface{

    private $db ;


    public function __construct(Database $db){
        $this->db = $db;
    }

    
    public function getAllAgencies(){
        $fetchAllAgenciesData = "SELECT * from agency join adresse on agency.addressID = adress.addressID";
        $this->db->query($fetchAllAgenciesData);
        try{
            return $this->db->fetchMultipleRow();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }

    }
    public function getAgencyById($agencyId){
        $agencyData = "SELECT * from agency where id = :agencyId";
        $this->db->query($agencyData);
        $this->db->bind(":agencyId",$agencyId);
        try{
            return $this->db->fetchOneRow();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }

    }
    public function addAgency(Agency $agency) {
        $addAgencyQuery = "INSERT INTO `agency`(`agencyID`, `longitude`, `latitude`, `bankID`, `addressID`) VALUES (:agencyId,:longitude,:latitude,:bankId,:adressId)";
        $this->db->query($addAgencyQuery);
        $this->db->bind(":Id", $agency->getId());
        $this->db->bind(":name", $agency->getname());
      
    
    
        try {
            $this->db->execute();
            echo "added";
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function deleteAgency($agencyId){
       $deleteAgency = "delete from agency where agencyID = :agencyId";
       $this->db->query($deleteAgency);
       $this->db->bind(":agencyId",$agencyId);
       try{
         $this->db->execute();
       }
       catch(PDOException $e){
        die($e->getMessage());
       }
    }

}

?>