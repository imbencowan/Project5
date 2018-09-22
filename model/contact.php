<?php
class Contact {
    private $contactID, $email, $words, $contactDate, $empAssigned;

    public function __construct() {
        $this->contactID = '';
		  $this->email = '';
        $this->words = '';
        $this->contactDate = '';
		  $this->empAssigned = '';
    }

    public function getContactID() {
        return $this->contactID;
    }

    public function setContactID($value) {
        $this->contactID = $value;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($value) {
        $this->email = $value;
    }

    public function getWords() {
        return $this->words;
    }

    public function setWords($value) {
        $this->words = $value;
    }

    public function getContactDate() {
        return $this->contactDate;
    }

    public function setContactDate($value) {
        $this->contactDate = $value;
    }
	 
	 public function getEmpAssigned() {
		 return $this->empAssigned;
	 }
	 
	 public function setEmpAssigned($value) {
		 $this->empAssigned = $value;
	 }

}
?>