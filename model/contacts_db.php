<?php
class ContactDB {
	public function getContactsByEmployee($empAssigned) {
		$db = Database::getDB('admin');
		
		$query = 'SELECT * FROM contact
					WHERE contact.empAssigned = :empAssigned
					ORDER BY contactID';
		$statement = $db->prepare($query);
		$statement->bindValue(":empAssigned", $empAssigned);
		$statement->execute();
		$rows = $statement->fetchAll();
		$statement->closeCursor();
		
		foreach ($rows as $row) {
			$contact = new Contact();
			$contact->setContactID($row['contactID']);
			$contact->setEmail($row['email']);
			$contact->setWords($row['text']);
			$contact->setContactDate($row['contactDate']);
			$contact->setEmpAssigned($row['empAssigned']);
			$contacts[] = $contact;
		}
		if ($rows != null) {
			return $contacts;	
		}
	}
	public function getContacts() {
		$db = Database::getDB();
		
		$query = 'SELECT * FROM contact
					ORDER BY contactID';
		$statement = $db->prepare($query);
		$statement->execute();
		$rows = $statement->fetchAll();
		$statement->closeCursor();
		
		foreach ($rows as $row) {
			$contact = new Contact();
			$contact->setContactID($row['contactID']);
			$contact->setEmail($row['email']);
			$contact->setWords($row['text']);
			$contact->setContactDate($row['contactDate']);
			$contacts[] = $contact;
		}
		return $contacts;	
	}
	public static function deleteContact($contactID) {
		$db = Database::getDB();
		$query = 'DELETE FROM contact
					WHERE contactID = :contactID';
		$statement = $db->prepare($query);
		$statement->bindValue(':contactID', $contactID);
		$statement->execute();
		$statement->closeCursor();
	}
}
