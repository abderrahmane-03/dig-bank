<?php


interface AtmInterface {
    public function getAllAtm();
    public function getAtmById($AtmId);
    public function addAtm(Atm $Atm);
    public function deleteAtm($AtmId);
}


?>