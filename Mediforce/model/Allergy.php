<?php

/**
 * Description of Allergy
 * Creates Allergy Objects
 * @author Wendi Harvey
 */
class Allergy {

    private $patId;                 //patient's unique id.
    private $allergy_id;            //Auto-incrementally assigned in DB.
    private $allergy_name;          //Describes the allergen.
    private $allergy_desc;          //Describes what type of reaction patient has.

    public function __construct($patId, $allergy_id, $allergy_name, $allergy_desc) {
        $this->patId = $patId;
        $this->allergy_id = $allergy_id;
        $this->allergy_name = $allergy_name;
        $this->allergy_desc = $allergy_desc;
    }

    public function getPatId() {
        return $this->patId;
    }

    public function setPatId($patId) {
        $this->patId = $patId;
    }

    public function getAllergy_id() {
        return $this->allergy_id;
    }

    public function getAllergy_name() {
        return $this->allergy_name;
    }

    public function getAllergy_desc() {
        return $this->allergy_desc;
    }

    public function setAllergy_id($allergy_id) {
        $this->allergy_id = $allergy_id;
    }

    public function setAllergy_name($allergy_name) {
        $this->allergy_name = $allergy_name;
    }

    public function setAllergy_desc($allergy_desc) {
        $this->allergy_desc = $allergy_desc;
    }

    public function __toString() {

        return $this->allergy_id . " " . $this->allergy_name .
                " " . $this->allergy_desc;
    }

}
