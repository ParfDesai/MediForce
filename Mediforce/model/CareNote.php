<?php
/**
 * Description of CareNote
 * Creates CareNote objects
 * @author Wendi Harvey
 */
class CareNote {
  private $careNoteId;               //Auto-incremented db generated id.           
  private $careNoteDate;             //Date-time stamp when note was written.
  private $careNote;                 //Care provider's text note.
  private $author;
  
  public function __construct($careNoteId,$careNoteDate, $careNote,$author) {
      $this->careNoteId = $careNoteId; 
      $this->careNoteDate = $careNoteDate;
      $this->careNote = $careNote;
      $this->author = $author;
  }
  
  public function getCareNoteId() {
      return $this->careNoteId;
  }

  public function setCareNoteId($careNoteId) {
      $this->careNoteId = $careNoteId;
  }

    public function getAuthor() {
      return $this->author;
  }

  public function setAuthor($author) {
      $this->author = $author;
  }

  public function getCareNoteDate() {
      return $this->careNoteDate;
  }

  public function getCareNote() {
      return $this->careNote;
  }

  public function setCareNoteDate($careNoteDate) {
      $this->careNoteDate = $careNoteDate;
  }

  public function setCareNote($careNote) {
      $this->careNote = $careNote;
  }

  public function __toString() {
        return $this->careNoteDate. " "
                . $this->careNote;
    }
}