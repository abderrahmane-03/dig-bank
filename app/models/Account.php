<?php
class Account
{
    private $id;
    private $rib;
    private $balance;
    private $currency;
    private $userId;

    public function __construct(){
    }


    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
   {
        $this->id = $id;
    }
    public function getRib()
    {
        return $this->rib;
    }
    public function setRib($rib)
    {
        $this->rib = $rib;
    }
    public function getBalance()
    {
        return $this->balance;
    }
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }
    public function getCurrency()
    {
        return $this->currency;
    }
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }
   public function getUserId()
    {
        return $this->userId;
    }
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }
}

?>