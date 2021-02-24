<?php
/**
 * Description of employee
 * Creates Employee objects
 * @author g-s
 */
class Employee {
    private $empId;         //Assigned by IT upon hire. 
    private $empFname;      //Employee's first name.
    private $empLname;      //Employee's last name.
    private $empEmail;      //Hospital assigned email address.
    private $empType;       //Refers to job title or main credential.
    private $empPwd;
    private $empUser;
    
    public function __construct($empId, $empFname, $empLname, $empEmail, $empType,
                                $empPwd,$empUser) {
        $this->empId = $empId;
        $this->empFname = $empFname;
        $this->empLname = $empLname;
        $this->empEmail = $empEmail;
        $this->empType = $empType;
        $this->empPwd = $empPwd;
        $this->empUser = $empUser;
    }
    public function getEmpPwd() {
        return $this->empPwd;
    }

    public function getEmpUser() {
        return $this->empUser;
    }

    public function setEmpPwd($empPwd) {
        $this->empPwd = $empPwd;
    }

    public function setEmpUser($empUser) {
        $this->empUser = $empUser;
    }

    public function getEmpId() {
        return $this->empId;
    }

    public function getEmpFname() {
        return $this->empFname;
    }

    public function getEmpLname() {
        return $this->empLname;
    }

    public function getEmpEmail() {
        return $this->empEmail;
    }

    public function getEmpType() {
        return $this->empType;
    }

    public function setEmpId($empId) {
        $this->empId = $empId;
    }

    public function setEmpFname($empFname) {
        $this->empFname = $empFname;
    }

    public function setEmpLname($empLname) {
        $this->empLname = $empLname;
    }

    public function setEmpEmail($empEmail) {
        $this->empEmail = $empEmail;
    }

    public function setEmpType($empType) {
        $this->empType = $empType;
    }
    
    public function __toString() {
        return $this->empId ." ". $this->empFname." ". $this->empLname." ".
                $this->empEmail." ".$this->empType ;
    }
}
