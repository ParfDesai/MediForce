<?php
/**
 * Description of PatientDemoInfo
 *
 * @author Wendi Harvey
 */
class PatientDemoInfo {
   
    private $patFName;              //Patient's first name.
    private $patLName;              //Patient's last name.
    private $patStrAddr;            //Patient's street address.
    private $patCity;               //Patient's city.
    private $patState;              //Patient's state.
    private $patZipcode;            //Patient's zip code.
    private $patPhone;              //Patient's phone number.
    private $patBirthday;           //Patient's birthday.
    private $patOccupation;         //Patient's occupation. 
    private $patSocSecNum;          //Patient's social security number.
    private $patEmail;              //Patient's email address (or resp par email).
    
    public function __construct($patFName, $patLName,$patStrAddr, $patCity, 
                                $patState, $patZipcode, $patPhone, $patBirthday,
                                $patOccupation, $patSocSecNum, $patEmail) {
        $this->patFName = $patFName;
        $this->patLName = $patLName;
        $this->patStrAddr = $patStrAddr;
        $this->patCity = $patCity;
        $this->patState = $patState;
        $this->patZipcode = $patZipcode;
        $this->patPhone = $patPhone;
        $this->patBirthday = $patBirthday;
        $this->patOccupation = $patOccupation;
        $this->patSocSecNum = $patSocSecNum;
        $this->patEmail = $patEmail;
    }
    
    public function getPatFName() {
        return $this->patFName;
    }

    public function getPatLName() {
        return $this->patLName;
    }

    public function getPatStrAddr() {
        return $this->patStrAddr;
    }

    public function getPatCity() {
        return $this->patCity;
    }

    public function getPatState() {
        return $this->patState;
    }

    public function getPatZipcode() {
        return $this->patZipcode;
    }

    public function getPatPhone() {
        return $this->patPhone;
    }

    public function getPatBirthday() {
        return $this->patBirthday;
    }

    public function getPatOccupation() {
        return $this->patOccupation;
    }

    public function getPatSocSecNum() {
        return $this->patSocSecNum;
    }

    public function getPatEmail() {
        return $this->patEmail;
    }

    public function setPatFName($patFName) {
        $this->patFName = $patFName;
    }

    public function setPatLName($patLName) {
        $this->patLName = $patLName;
    }

    public function setPatStrAddr($patStrAddr) {
        $this->patStrAddr = $patStrAddr;
    }

    public function setPatCity($patCity) {
        $this->patCity = $patCity;
    }

    public function setPatState($patState) {
        $this->patState = $patState;
    }

    public function setPatZipcode($patZipcode) {
        $this->patZipcode = $patZipcode;
    }

    public function setPatPhone($patPhone) {
        $this->patPhone = $patPhone;
    }

    public function setPatBirthday($patBirthday) {
        $this->patBirthday = $patBirthday;
    }

    public function setPatOccupation($patOccupation) {
        $this->patOccupation = $patOccupation;
    }

    public function setPatSocSecNum($patSocSecNum) {
        $this->patSocSecNum = $patSocSecNum;
    }

    public function setPatEmail($patEmail) {
        $this->patEmail = $patEmail;
    }

    public function __toString() {
        return "$this->patFName $this->patLName $this->patStrAddr $this->patCity"
                . " $this->patState "
                . "$this->patZipcode $this->patPhone $this->patBirthday "
                . "$this->patOccupation $this->patSocSecNum $this->patSocSecNum";
    }


}
