<?php

/**
 * Description of Diagnoses
 *
 * @author Wendi Harvey
 */
class Diagnoses {

    private $diagId;
    private $patId;
    private $diagName;
    private $diagDate;
    private $diagdBy;
    private $diagByTitle;

    public function __construct($diagId, $patId, $diagName, $diagDate, $diagdBy,
            $diagByTitle) {
        $this->diagId = $diagId;
        $this->patId = $patId;
        $this->diagName = $diagName;
        $this->diagDate = $diagDate;
        $this->diagdBy = $diagdBy;
        $this->diagByTitle = $diagByTitle;
    }

    public function getDiagId() {
        return $this->diagId;
    }

    public function getPatId() {
        return $this->patId;
    }

    public function getDiagName() {
        return $this->diagName;
    }

    public function getDiagDate() {
        return $this->diagDate;
    }

    public function getDiagdBy() {
        return $this->diagdBy;
    }

    public function getDiagByTitle() {
        return $this->diagByTitle;
    }

    public function setDiagId($diagId) {
        $this->diagId = $diagId;
    }

    public function setPatId($patId) {
        $this->patId = $patId;
    }

    public function setDiagName($diagName) {
        $this->diagName = $diagName;
    }

    public function setDiagDate($diagDate) {
        $this->diagDate = $diagDate;
    }

    public function setDiagdBy($diagdBy) {
        $this->diagdBy = $diagdBy;
    }

    public function setDiagByTitle($diagByTitle) {
        $this->diagByTitle = $diagByTitle;
    }

    public function __toString() {
        return $this->diagId . " " .
                $this->patId . " " .
                $this->diagDate . " " .
                $this->diagName . " " .
                $this->diagdBy . " " .
                $this->diagdBy;
    }

}
