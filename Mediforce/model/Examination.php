<?php

/**
 * The Examination class builds patient exam objects.
 *
 * @author Wendi Harvey
 */
class Examination {

    private $examId;                 //DB auto-generated unique id.
    private $examDate;
    private $patId;
    private $examSoap;
    private $empId;
    private $practName;
    private $empTitle;

    public function __construct($examId, $examDate, $patId, $examSoap, $empId,
            $practName, $empTitle) {
        $this->examId = $examId;
        $this->examDate = $examDate;
        $this->patId = $patId;
        $this->examSoap = $examSoap;
        $this->empId = $empId;
        $this->practName = $practName;
        $this->empTitle = $empTitle;
    }

    public function getExamId() {
        return $this->examId;
    }

    public function getEmpTitle() {
        return $this->empTitle;
    }

    public function setExamId($examId) {
        $this->examId = $examId;
    }

    public function setEmpTitle($empTitle) {
        $this->empTitle = $empTitle;
    }

    public function getExamDate() {
        return $this->examDate;
    }

    public function getPatId() {
        return $this->patId;
    }

    public function getExamSoap() {
        return $this->examSoap;
    }

    public function getEmpId() {
        return $this->empId;
    }

    public function getPractName() {
        return $this->practName;
    }

    public function setExamDate($examDate) {
        $this->examDate = $examDate;
    }

    public function setPatId($patId) {
        $this->patId = $patId;
    }

    public function setExamSoap($examSoap) {
        $this->examSoap = $examSoap;
    }

    public function setEmpId($empId) {
        $this->empId = $empId;
    }

    public function setPractName($practName) {
        $this->practName = $practName;
    }

    public function __toString() {
        return $this->examDate . " " .
                $this->patId . " " .
                $this->examSoap . " " .
                $this->empId . " " .
                $this->practName;
    }

}
