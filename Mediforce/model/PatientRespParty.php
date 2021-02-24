<?php
/**
 * Description of PatientRespParty
 *
 * @author Wendi Harvey
 */
class PatientRespParty {
    private $patRespParName;       //Patient's responsible party's full name.
    private $patRespParPhone;       //Patient's resp party's phone number, if appl.
    private $patRespParType;        //Examples: parent or guardian.
    
    public function __construct($patRespParName,
                                $patRespParPhone, $patRespParType) {
        $this->patRespParName = $patRespParName;
        $this->patRespParPhone = $patRespParPhone;
        $this->patRespParType = $patRespParType;
    }
    
    public function getPatRespParName() {
        return $this->patRespParName;
    }

    public function getPatRespParPhone() {
        return $this->patRespParPhone;
    }

    public function getPatRespParType() {
        return $this->patRespParType;
    }

    public function setPatRespParName($patRespParName) {
        $this->patRespParName = $patRespParName;
    }

    public function setPatRespParPhone($patRespParPhone) {
        $this->patRespParPhone = $patRespParPhone;
    }

    public function setPatRespParType($patRespParType) {
        $this->patRespParType = $patRespParType;
    }

    public function __toString() {
        return "$this->patRespParName "
                . "$this->patRespParPhone $this->patRespParType";
        
    }


    
    
}
