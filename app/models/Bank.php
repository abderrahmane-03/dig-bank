<?php
// Bank.php
class Bank {
    private $id;
    private $name;
    private $logo;

   
    public function __construct(){
       }
       
       public function getId()
       {
        return $this->id;
    
       }
       public function setId($id)
       {
        return $this->id;
    
       }
       public function getName()
       {
        return $this->name;
    
       }
       public function setName($name)
       {
        return $this->name;
    
       }
       public function getlogo()
       {
        return $this->logo;
    
       }
       public function setlogo($logo)
       {
        return $this->logo;
    
       }
}
?>