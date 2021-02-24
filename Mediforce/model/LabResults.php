<?php

/**
 * Description of LabResults
 *
 * @author g-s
 */
class LabResults {

    private $labId;                 //DB auto-generated unique id.
    private $patId;                 //Patient's unique id.
    private $labResDate;            //Date of lab
    private $labResData;            //Lab data attachment(s)

    public function __construct($labId, $patId, $labResDate, $labResData) {

        $this->labId = $labId;
        $this->patId = $patId;
        $this->labResDate = $labResDate;
        $this->labResData = $labResData;
    }

    public function getLabId() {
        return $this->labId;
    }

    public function getPatId() {
        return $this->patId;
    }

    public function setLabId($labId) {
        $this->labId = $labId;
    }

    public function setPatId($patId) {
        $this->patId = $patId;
    }

    public function getLabResDate() {
        return $this->labResDate;
    }

    public function getLabResData() {
        return $this->labResData;
    }

    public function setLabResDate($labResDate) {
        $this->labResDate = $labResDate;
    }

    public function setLabResData($labResData) {
        $this->labResData = $labResData;
    }

    public function __toString() {
        return $this->labResDate . " " . $this->labResData;
    }

}
