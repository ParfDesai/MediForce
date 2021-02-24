<?php
/**
 * Description of PhysicianOrder
 * Creates PhysicianOrder objects
 * @author Wendi Harvey
 */
class PhysicianOrder {
   
    private $patId;             //Patient's unique id.
    private $physOrdId;         //DB auto-generated unique id.
    private $physOrdDate;       //Datetime PO was created.
    private $physOrd;           //Text of precise PO.
    private $orderBy;           //Doc, NP  or PA who created order.
    private $notedBy;           //RN who noted the order.
    private $notedDate;         //Datetime RN noted order.
    
    public function __construct($patId,$physOrdId,$physOrdDate,
                                $physOrd, $orderBy,$notedBy,
                                $notedDate) {
        $this->patId = $patId;
        $this->physOrdId = $physOrdId;
        $this->physOrdDate = $physOrdDate;
        $this->physOrd = $physOrd;
        $this->orderBy = $orderBy;
        $this->notedBy = $notedBy;
        $this->notedDate = $notedDate;
    }
    public function getPatId() {
        return $this->patId;
    }

    public function getPhysOrdId() {
        return $this->physOrdId;
    }

    public function setPatId($patId) {
        $this->patId = $patId;
    }

    public function setPhysOrdId($physOrdId) {
        $this->physOrdId = $physOrdId;
    }

        public function getPhysOrdDate() {
        return $this->physOrdDate;
    }

    public function getPhysOrd() {
        return $this->physOrd;
    }

    public function getOrderBy() {
        return $this->orderBy;
    }

    public function getNotedBy() {
        return $this->notedBy;
    }

    public function getNotedDate() {
        return $this->notedDate;
    }

    public function setPhysOrdDate($physOrdDate) {
        $this->physOrdDate = $physOrdDate;
    }

    public function setPhysOrd($physOrd) {
        $this->physOrd = $physOrd;
    }

    public function setOrderBy($orderBy) {
        $this->orderBy = $orderBy;
    }

    public function setNotedBy($notedBy) {
        $this->notedBy = $notedBy;
    }

    public function setNotedDate($notedDate) {
        $this->notedDate = $notedDate;
    }

    public function __toString() {
        return $this->physOrdDate." ". $this->physOrd." "
                . $this->orderBy." ".$this->notedBy." ". $this->notedDate;
    }


    
    
    
}
