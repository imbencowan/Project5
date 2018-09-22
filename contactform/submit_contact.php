<?php

	$db = Database::getDB('contact');
	
	if ($db != null) {
		//here we put form data into variables
		$email = filter_input(INPUT_POST, 'email_address');
		$comments = filter_input(INPUT_POST, 'comments');

		//build and execute the statement that adds the input to the database
		$query = 'INSERT INTO contact
						  (email, text)
					  VALUES
						  (:email_address, :comments)';
		 $statement = $db->prepare($query);
		 $statement->bindValue(':email_address', $email);
		 $statement->bindValue(':comments', $comments);
		 $statement->execute();
		 $statement->closeCursor();
?>

<!DOCTYPE html>
<html>
<head>
<title>Contact</title>
<link rel="stylesheet" type="text/css" href="../css/main.css">
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
</head>

<body>
	<header>
		<h1>Outdoorsite</h1>
	</header>
	<!--the nav bar!-->
	<nav>
		<ul>
			<a href="../index.html"><li>Home</li></a>
			<a href="../newslettersignup/index.php"><li>Newsletter</li></a>
			<a href="index.php"><li>Contact Us</li></a>
		</ul>
	</nav>
    <main>
        <h1>Thank you</h1>
        <p>Your information has been submitted.</p>
        <p>Thank you for taking the time to provide feedback. If you had any questions or concerns, they will be addressed shortly.</p>
    </main>
</body>
</html>

	<?php } /*not sure if there is an issue with doing things this way, but it worked in chrome on localhost*/ ?>