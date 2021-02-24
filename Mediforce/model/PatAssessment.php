<?php

/**
 * The Assessment class builds patient Assessment objects.
 *
 * @author Wendi Harvey
 */
class PatAssessment {

    private $assessId;                     //DB auto-generated unique ID.
    private $assessDate;                   //Date the assessment was completed.
    private $assessDisc;                   //Name of discipline completing assessment.
    private $patId;                        //Pat Id of person who was assessed.
    private $assessSoap;                   //SOAP assessment text.
    private $empName;                      //Name of employee who completed assessment.
    private $empId;                        //Emp id of person who completed assessment.
    private $empTitle;                     //Emp title (RN, MD, etc.)

    public function __construct($assessId, $assessDate, $assessDisc, $patId,
            $assessSoap, $empName, $empId, $empTitle) {

        $this->assessId = $assessId;
        $this->assessDate = $assessDate;
        $this->assessDisc = $assessDisc;
        $this->patId = $patId;
        $this->assessSoap = $assessSoap;
        $this->empName = $empName;
        $this->empId = $empId;
        $this->empTitle = $empTitle;
    }

    public function getAssessId() {
        return $this->assessId;
    }

    public function setAssessId($assessId) {
        $this->assessId = $assessId;
    }

    public function getEmpTitle() {
        return $this->empTitle;
    }

    public function setEmpTitle($empTitle) {
        $this->empTitle = $empTitle;
    }

    public function getAssessDate() {
        return $this->assessDate;
    }

    public function getAssessDisc() {
        return $this->assessDisc;
    }

    public function getPatId() {
        return $this->patId;
    }

    public function getAssessSoap() {
        return $this->assessSoap;
    }

    public function getEmpName() {
        return $this->empName;
    }

    public function getEmpId() {
        return $this->empId;
    }

    public function setAssessDate($assessDate) {
        $this->assessDate = $assessDate;
    }

    public function setAssessDisc($assessDisc) {
        $this->assessDisc = $assessDisc;
    }

    public function setPatId($patId) {
        $this->patId = $patId;
    }

    public function setAssessSoap($assessSoap) {
        $this->assessSoap = $assessSoap;
    }

    public function setEmpName($empName) {
        $this->empName = $empName;
    }

    public function setEmpId($empId) {
        $this->empId = $empId;
    }

    public function __toString() {
        return $this->assessDate . " " .
                $this->assessDisc . " " .
                $this->assessSoap . " " .
                $this->empId . " " .
                $this->empName;
    }

}
