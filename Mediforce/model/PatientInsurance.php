<?php
/**
 * Description of PatientInsurance
 * Creates PatientInsurance objects.
 * @author Wendi Harvey
 */
class PatientInsurance {
    private $patInsId;
    private $patInsCo;
    
    public function __construct($patInsId, $patInsCo) {
        $this->patInsId = $patInsId;
        $this->patInsCo = $patInsCo;
    }
    
    public function getPatInsId() {
        return $this->patInsId;
    }

    public function getPatInsCo() {
        return $this->patInsCo;
    }

    public function setPatInsId($patInsId) {
        $this->patInsId = $patInsId;
    }

    public function setPatInsCo($patInsCo) {
        $this->patInsCo = $patInsCo;
    }

    public function __toString() {
        return $this->patInsId." ". $this->patInsCo;
    }



}
