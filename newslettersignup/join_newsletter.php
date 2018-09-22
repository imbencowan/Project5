<?php
	$db = Database::getDB('newsletter');
	
	if ($db != null) {
		//put the form data into variables
		$fName = filter_input(INPUT_POST, 'first_name');
		$lName = filter_input(INPUT_POST, 'last_name');
		$email = filter_input(INPUT_POST, 'email_1');
		
		//build and execute the statement to input data to the database itself
		$query = 'INSERT INTO emaillist
						  (email, fName, lName)
					  VALUES
						  (:email_1, :first_name, :last_name)';
		 $statement = $db->prepare($query);
		 $statement->bindValue(':email_1', $email);
		 $statement->bindValue(':first_name', $fName);
		 $statement->bindValue(':last_name', $lName);
		 $statement->execute();
		 $statement->closeCursor();
			//close the if { at the end of the document
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Join Our Email List</title>
	<link rel="stylesheet" href="../css/main.css">
	<!-- -----------------------------------------------------------
	---- comment out the javascript, replace it with the php above
		<script>
		//<![CDATA[
		var decode = function ( text ) {
			 text = text.replace(/\+/g, " ");
			 text = text.replace(/%[a-fA-F0-9]{2}/g, 
				  function ( text ) {
						return String.fromCharCode( "0x" + text.substr(1,2));
				  }
			 );
			 return text;
		}
			 
		var display_data = function () {
			 var url_parts = window.location.toString().split("?");
			 if ( url_parts.length != 2 ) return;
			 
			 var fields = url_parts[1].split("&");
			 
			 if ( fields.length == 0 ) {
				  document.write("<p>No data was submitted.</p>");
			 } else {
				  document.write("<dl>");
				  var field_parts;
				  for ( var i in fields ) {
						field_parts = fields[i].split("=");
						field_parts[0] = decode( field_parts[0] );
						field_parts[1] = decode( field_parts[1] );
						document.write("<dt>" + field_parts[0] + "</dt>");
						document.write("<dd>" + field_parts[1] + "</dd>");
				  }
				  document.write("</dl>");
			 }
		}
		//]]>
		</script>
	-->
</head>

<body>
	<header>
		<h1>Outdoorsite</h1>
	</header>
	<!--the nav bar!-->
	<nav>
		<ul>
			<a href="../index.html"><li>Home</li></a>
			<a href="index.php"><li>Newsletter</li></a>
			<a href="../contactform/index.php"><li>Contact Us</li></a>
		</ul>
	</nav>
	<main>
	    <h1>Thanks for joining!</h1>
	    <p>Your registration has been submitted. Look forward to our next newsletter soon.<p>
		 <!-- hey, taking this out for now, so that i don't have to deal with it for this presentation
		 <p>Name: <?php echo htmlspecialchars($fName) . ' ' . htmlspecialchars($lName); ?></p>
		 <p>Email: <?php echo htmlspecialchars($email); ?></p>
		 -->
	    <!-- we're ditching this script too, replaced with the php
			<script type="text/javascript">display_data();</script>
		-->
	</main>
</body>
</html>

<?php } /*i'm still not sure this is a good idea*/ ?>