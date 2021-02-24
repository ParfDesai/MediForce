<?php

/**
 * Description of MedAdminRec
 * Creates MedAdminRec objects
 * @author Wendi Harvey
 */
class MedAdminRec {

    private $patId;             //Patient's unique id.
    private $marId;             //DB auto-generated unique id.
    private $marDate;           //Datetime med was administered to patient.
    private $marMed;            //Refers to the precise medication given to patient.
    private $marNote;           //Optional mar note.
    private $empId;             //Refers to the employee who administered med.
    private $empName;           //Employee who administered the med.
    private $empTitle;          //Title of employee who administered the med.

    public function __construct($patId, $marId, $marDate, $marMed, $marNote, $empId, $empName, $empTitle) {

        $this->patId = $patId;
        $this->marId = $marId;
        $this->marDate = $marDate;
        $this->marMed = $marMed;
        $this->marNote = $marNote;
        $this->empId = $empId;
        $this->empName = $empName;
        $this->empTitle = $empTitle;
    }
    
    public function getMarNote() {
        return $this->marNote;
    }

    public function setMarNote($marNote) {
        $this->marNote = $marNote;
    }

    
    public function getPatId() {
        return $this->patId;
    }

    public function getMarId() {
        return $this->marId;
    }

    public function getEmpName() {
        return $this->empName;
    }

    public function getEmpTitle() {
        return $this->empTitle;
    }

    public function setPatId($patId) {
        $this->patId = $patId;
    }

    public function setMarId($marId) {
        $this->marId = $marId;
    }

    public function setEmpName($empName) {
        $this->empName = $empName;
    }

    public function setEmpTitle($empTitle) {
        $this->empTitle = $empTitle;
    }

    public function getEmpId() {
        return $this->emp_id;
    }

    public function setEmpId($empId) {
        $this->empId = $empId;
    }

    public function getMarDate() {
        return $this->marDate;
    }

    public function getMarMed() {
        return $this->marMed;
    }

    public function setMarDate($marDate) {
        $this->marDate = $marDate;
    }

    public function setMarMed($marMed) {
        $this->marMed = $marMed;
    }

    public function __toString() {
        return $this->marDate . " " . $this->marMed . " " . $this->emp_id;
    }

}
