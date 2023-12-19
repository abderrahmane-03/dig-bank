<?php
// Transaction.php
class Transaction {
    private $id;
    private $amount;
    private $currency;
    private $type;
    private $accountId;


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
    public function getamount()
    {
     return $this->amount;
 
    }
    public function setamount($amount)
    {
     return $this->amount;
 
    }
    public function getcurrency()
    {
     return $this->currency;
 
    }
    public function setcurrency($currency)
    {
     return $this->currency;
 
    }
    public function gettype()
    {
     return $this->type;
 
    }
    public function settype($type)
    {
     return $this->type;
 
    }
    public function getaccountId()
    {
     return $this->accountId;
 
    }
    public function setaccountId($accountId)
    {
     return $this->accountId;
 
    }
}

?>