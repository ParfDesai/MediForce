<?php

/**
 * Description of TreatmentAdmRec
 * Creates TAR objects
 * @author Wendi Harvey
 */
class TreatmentAdmRec {

    private $patId;             //Patient's unique id.
    private $tarId;             //Hospital DB assigned auto-incremented id
    private $tarDate;           //Datetime treatment was administered.
    private $tarType;           //Specific type of treatment administered.
    private $tarNote;           //Optional note that staff member administering can enter.
    private $empTreatedBy;      //Name & Title of emp doing treatment.
    private $empId;             //EmpId of employee who did treatment.

    public function __construct($patId, $tarId, $tarDate, $tarType,
            $tarNote, $empTreatBy, $empId) {
        $this->patId = $patId;
        $this->tarId = $tarId;
        $this->tarDate = $tarDate;
        $this->tarType = $tarType;
        $this->tarNote = $tarNote;
        $this->empTreatedBy = $empTreatBy;
        $this->empId = $empId;
    }

    public function getPatId() {
        return $this->patId;
    }

    public function setPatId($patId) {
        $this->patId = $patId;
    }

    public function getTarNote() {
        return $this->tarNote;
    }

    public function getEmpTreatedBy() {
        return $this->empTreatedBy;
    }

    public function getEmpId() {
        return $this->empId;
    }

    public function setTarNote($tarNote) {
        $this->tarNote = $tarNote;
    }

    public function setEmpTreatedBy($empTreatedBy) {
        $this->empTreatedBy = $empTreatedBy;
    }

    public function setEmpId($empId) {
        $this->empId = $empId;
    }

    public function getTarId() {
        return $this->tarId;
    }

    public function getTarDate() {
        return $this->tarDate;
    }

    public function getTarType() {
        return $this->tarType;
    }

    public function setTarId($tarId) {
        $this->tarId = $tarId;
    }

    public function setTarDate($tarDate) {
        $this->tarDate = $tarDate;
    }

    public function setTarType($tarType) {
        $this->tarType = $tarType;
    }

    public function __toString() {
        return $this->tarId . " " . $this->tarDate . " " . $this->tarType .
                " " . $this->tarNote . " " . $this->empTreatedBy . " " . $this->empId;
    }

}
