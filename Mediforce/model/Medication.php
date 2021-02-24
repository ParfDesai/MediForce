<?php

/**
 * Description of Medication Class
 * This class creates Medication objects
 *
 * @author Wendi Harvey
 */
class Medication {

    private $patId;                      //Patient's unique id.
    private $medId;                      //DB Auto-generated unique id.
    private $medName;                    //Name of medication
    private $medReason;                  //Reason for taking medication
    private $medDate;                    //When person started taking med
    private $prescId;                    //Prescription ID#

    public function __construct($patId, $medId, $medName, $medDate, $medReason, $prescId) {

        $this->patId = $patId;
        $this->medId = $medId;
        $this->medName = $medName;
        $this->medDate = $medDate;
        $this->medReason = $medReason;
        $this->prescId = $prescId;
    }

    public function getPatId() {
        return $this->patId;
    }

    public function getMedId() {
        return $this->medId;
    }

    public function setPatId($patId) {
        $this->patId = $patId;
    }

    public function setMedId($medId) {
        $this->medId = $medId;
    }

    public function getMedName() {
        return $this->medName;
    }

    public function getMedReason() {
        return $this->medReason;
    }

    public function getMedDate() {
        return $this->medDate;
    }

    public function getPrescId() {
        return $this->prescId;
    }

    public function setMedName($medName) {
        $this->medName = $medName;
    }

    public function setMedReason($medReason) {
        $this->medReason = $medReason;
    }

    public function setMedDate($medDate) {
        $this->medDate = $medDate;
    }

    public function setPrescId($prescId) {
        $this->prescId = $prescId;
    }

    public function __toString() {
        return $this->medDate . " " . $this->medName
                . " " . $this->medReason . " " . $this->prescId;
    }

}
