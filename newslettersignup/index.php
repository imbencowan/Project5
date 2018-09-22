<?php
require('../model/database.php');
	//include the fields and validate classes
require_once('../model/fields.php');
require_once('../model/validate.php');

$validate = new Validate();
$fields = $validate->getFields();
$fields->addField('firstName', '');
$fields->addField('lastName', '');
$fields->addField('email1', '');
$fields->addField('email2', '');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'showForm';
    }
}

if ($action == 'showForm'){
	include('newsletter_form.php');
} else if ($action == 'submitForm') {
		//bring in the form values from POST
	$firstName = filter_input(INPUT_POST, 'firstName');
	$lastName = filter_input(INPUT_POST, 'lastName');
	$email1 = filter_input(INPUT_POST, 'email1');
	$email2 = filter_input(INPUT_POST, 'email2');
		//validate them
	$validate->text('firstName', $firstName);
	$validate->text('lastName', $lastName);
	$validate->email('email1', $email1);
	$validate->text('email2', $email2);
	$validate->fieldsMatch('email1', $email1, 'email2', $email2);

		// Load appropriate view based on hasErrors
	if ($fields->hasErrors()) {
		include('newsletter_form.php');
	} else {
      include('join_newsletter.php');
	}
}

?>