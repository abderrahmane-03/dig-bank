<?php


interface AgencyServiceInterface {
    public function getAllAgencies();
    public function getAgencyById($agencyId);
    public function addAgency(Agency $agency);
    public function deleteAgency($agencyId);
}


?>