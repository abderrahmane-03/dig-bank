<?php
class User {
    private $id;
    private $username;
    private $password;
    private $adresseId;
    private $agencyId;
    private $roleId;


    public function __construct() {
    }

    public function getId()
    {
     return $this->id;
 
    }
    public function setId($id)
    {
     return $this->id;
 
    }
    public function getusername()
    {
     return $this->username;
 
    }
    public function setusername($username)
    {
     return $this->username;
 
    }
    public function getpassword()
    {
     return $this->password;
 
    }
    public function setpassword($password)
    {
     return $this->password;
 
    }
    public function getadresseId()
    {
     return $this->adresseId;
 
    }
    public function setadresseId($adresseId)
    {
     return $this->adresseId;
 
    }
    public function getagencyId()
    {
     return $this->agencyId;
 
    }
    public function setagencyId($agencyId)
    {
     return $this->agencyId;
 
    }
    public function getroleId()
    {
     return $this->roleId;
 
    }
    public function setroleId($roleId)
    {
     return $this->roleId;
 
    }
}
?>