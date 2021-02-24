<?php

/**
 * Description of Hospitalization
 *
 * @author g-s
 */
class Hospitalization {

    private $patId;                //Unique patient id.
    private $hospId;               //DB auto-generated unique id.
    private $hospInDate;           //Refers to in-date of particular hospitalization.
    private $hospOutDate;          //Refers to out-date of particular hospitalization.
    private $hospName;             //Name of hospital patient was hospitalized at.
    private $hospReason;           //Describes why patient was hospitalized in this instance.
    private $hospContact;          //Refers to name of a physician that can be contacted from hospitalization.
    private $hospPhone;            //Hospital phone number where patient was hospitalized.

    public function __construct($patId, $hospId, $hospInDate, $hospOutDate,
            $hospName, $hospReason, $hospContact, $hospPhone) {
        $this->patId = $patId;
        $this->hospId = $hospId;
        $this->hospInDate = $hospInDate;
        $this->hospOutDate = $hospOutDate;
        $this->hospName = $hospName;
        $this->hospReason = $hospReason;
        $this->hospContact = $hospContact;
        $this->hospPhone = $hospPhone;
    }

    public function getPatId() {
        return $this->patId;
    }

    public function setPatId($patId) {
        $this->patId = $patId;
    }

    public function getHospId() {
        return $this->hospId;
    }

    public function setHospId($hospId) {
        $this->hospId = $hospId;
    }

    public function getHospInDate() {
        return $this->hospInDate;
    }

    public function getHospOutDate() {
        return $this->hospOutDate;
    }

    public function getHospName() {
        return $this->hospName;
    }

    public function getHospReason() {
        return $this->hospReason;
    }

    public function getHospContact() {
        return $this->hospContact;
    }

    public function getHospPhone() {
        return $this->hospPhone;
    }

    public function setHospInDate($hospInDate) {
        $this->hospInDate = $hospInDate;
    }

    public function setHospOutDate($hospOutDate) {
        $this->hospOutDate = $hospOutDate;
    }

    public function setHospName($hospName) {
        $this->hospName = $hospName;
    }

    public function setHospReason($hospReason) {
        $this->hospReason = $hospReason;
    }

    public function setHospContact($hospContact) {
        $this->hospContact = $hospContact;
    }

    public function setHospPhone($hospPhone) {
        $this->hospPhone = $hospPhone;
    }

    public function __toString() {
        return $this->hospInDate . " " . $this->hospOutDate . " "
                . $this->hospName . " " . $this->hospReason . " " . $this->hospContact . " "
                . $this->hospPhone;
    }

}
