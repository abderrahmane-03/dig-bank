<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/BRIEF-8/app/services/DatabaseService.php");
require_once("UserServiceInterface.php");

class UserService implements UserInterface{

    private $db ;


    public function __construct(Database $db){
        $this->db = $db;
    }

    public function getAllUser(){
        $fetchAllAgenciesData = "select * from User join adresse on User.addressID = adress.addressID";
        $this->db->query($fetchAllAgenciesData);
        try{
            return $this->db->fetchMultipleRow();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function getUserById($UserId){
        $UserData = "select * from User where UserID = :UserId";
        $this->db->query($UserData);
        $this->db->bind(":UserId",$UserId);
        try{
            return $this->db->fetchOneRow();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function addUser(User $User){
       
       $addUserQuery = "INSERT INTO `User`(`UserID`, `username`, `password`, `agencyID`, `addressID`) VALUES (:UserId,:username,:password,:agencyId,:adressId)" ;
       $this->db->query($addUserQuery);
       $this->db->bind(":UserId",$User->getId());
       $this->db->bind(":username",$User->getusername());
       $this->db->bind(":password",$User->getpassword());
       $this->db->bind(":agencyId",$User->getagencyId());
       $this->db->bind(":roleId",$User->getroleId());
       
       try{
        $this->db->execute();
        echo "added";
       }
       catch(PDOException $e){
         die($e->getMessage());
       }
    }
    public function updateUser(User $User){
         $updateUser = "UPDATE `User` SET `username`= :username,`password`= :password WHERE UserID = :UserId";
         $this->db->query($updateUser);
         $this->db->bind(":username",$User->getusername());
         $this->db->bind(":password",$User->getpassword());
         $this->db->bind(":roleId",$User->getroleId());
       
         try{
            $this->db->execute();
            echo "updated";
         }
         catch(PDOException $e){
            die($e->getMessage());
         }
    }
    public function deleteUser($UserId){
       $deleteUser = "delete from User where UserID = :UserId";
       $this->db->query($deleteUser);
       $this->db->bind(":UserId",$UserId);
       try{
         $this->db->execute();
       }
       catch(PDOException $e){
        die($e->getMessage());
       }
    }
}

?>