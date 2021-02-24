<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of immunization
 *
 * @author g-s
 */
class Immunization {
    
    private $immunizId;                 //DB auto-generated unique id.
    private $immunizDate;               //Date immunization was given.
    private $immunizName;               //Name of immunization.
    private $givenBy;                   //Name of care provider who gave immuniz.
    
    public function __construct($immunizId,$immunizDate, $immunizName,$givenBy) {
        $this->immunizId = $immunizId;
        $this->immunizDate = $immunizDate;
        $this->immunizName = $immunizName;
        $this->givenBy = $givenBy;
    }
    
    public function getImmunizId() {
        return $this->immunizId;
    }

    public function setImmunizId($immunizId) {
        $this->immunizId = $immunizId;
    }

        public function getImmunizDate() {
        return $this->immunizDate;
    }

    public function getImmunizName() {
        return $this->immunizName;
    }
    
    public function getGivenBy(){
        return $this->givenBy;
    }

    public function setImmunizDate($immunizDate) {
        $this->immunizDate = $immunizDate;
    }

    public function setImmunizName($immunizName) {
        $this->immunizName = $immunizName;
    }
    
    public function __toString() {
        return $this->immunizDate." "
                . $this->immunizName." ". $this->givenBy;
    }

}
