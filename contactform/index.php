<?php
require('../model/database.php');
	//include the fields and validate classes
require_once('../model/fields.php');
require_once('../model/validate.php');

$validate = new Validate();
$fields = $validate->getFields();
$fields->addField('emailAddress', '');
$fields->addField('reenterEmail', '');
$fields->addField('comments', '');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'showForm';
    }
}

if ($action == 'showForm') {
	include('contact_form.php');
} else if ($action == 'submitForm') {
		//bring in values from the POST
	$emailAddress = filter_input(INPUT_POST, 'emailAddress');
	$reenterEmail = filter_input(INPUT_POST, 'reenterEmail');
	$comments = filter_input(INPUT_POST, 'comments');
	
		//validate the fields
	$validate->email('emailAddress', $emailAddress);
	$validate->text('reenterEmail', $reenterEmail);
	$validate->fieldsMatch('emailAddress', $emailAddress, 'reenterEmail', $reenterEmail);
	$validate->text('comments', $comments, true, 1, 1000);
	
		// Load appropriate view based on hasErrors
	if ($fields->hasErrors()) {
		include('contact_form.php');
	} else {
      include('submit_contact.php');
	}
}
?>
