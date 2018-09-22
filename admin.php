<?php
require '/model/database.php';
require '/model/contacts_db.php';
require '/admin/contact_admin.php';
require '/model/contact.php';

include '/view/altheader.php'; 

$employeeID = filter_input(INPUT_POST, 'employeeID');
$action = filter_input(INPUT_POST, 'action');
	//sets the action to selectEmployee when first accessing the page
if ($employeeID == NULL) {
	  $action = 'selectEmployee';
} 

if ($action == 'selectEmployee') {
	include('admin/select_employee.php');
} else if ($action == 'viewContacts') {
		//bring in the employee number
	$employeeID = filter_input(INPUT_POST, 'employeeID');
		//get the objects array
	$contacts = ContactDB::getContactsByEmployee($employeeID);
		// Display the comments
	if ($contacts == null) {
		include('admin/no_contacts.php');
		include('admin/select_employee.php');
	} else {
		include('admin/view_contacts.php');
		include('admin/select_employee.php');
	}
} else if ($action == 'deleteContact') {
	// Get the IDs
    $contactID = filter_input(INPUT_POST, 'contactID', FILTER_VALIDATE_INT);
	$employeeID = filter_input(INPUT_POST, 'employeeID', FILTER_VALIDATE_INT);

    // Delete the product
    ContactDB::deleteContact($contactID);

    // Display the Product List page for the current category
    header("Location: admin.php?employeeID=$employeeID.?action='viewContacts'");
}

include '/view/footer.php';
?>