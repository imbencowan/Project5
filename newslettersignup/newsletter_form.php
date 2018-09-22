<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Join Newsletter</title>
   	<link rel="stylesheet" href="../css/main.css">
   	<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
   	<script src="email_list.js"></script>
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
        <h1>Would you like to join our email list?</h1>
		  <p>Enter your information below:</p>
        <form id="email_form" name="email_form" action="index.php" method="POST">
				<input type="hidden" name="action" value="submitForm">
				
	        <label for="first_name">First Name:</label>
	        <input type="text" id="first_name" name="firstName">
	        <?php echo $fields->getField('firstName')->getHTML(); ?><br>
	        	        
			<label for="last_name">Last Name:</label>
	        <input type="text" id="last_name" name="lastName">
	        <?php echo $fields->getField('lastName')->getHTML(); ?><br>
	      
			<label for="email_1">Email Address:</label>
	        <input type="text" id="email_1" name="email1">
	        <?php echo $fields->getField('email1')->getHTML(); ?><br>
	        	        
	        <label for="email_2">Re-enter Email Address:</label>
	        <input type="text" id="email_2" name="email2">
	        <?php echo $fields->getField('email2')->getHTML(); ?><br>
	        	        

<!--
	        <label for="state">State Code:</label>
	        <input type="text" id="state" name="state" placeholder="2-character code">
	        <br>
	        	        
	        <label for="zip">Zip Code:</label>
	        <input type="text" id="zip" name="zip" placeholder="99999">
	        <br>
	        
	        <label>Email me about:</label>
	        <input type="checkbox" id="web" name="web" value="web">Web books
	        <input type="checkbox" id="java" name="java" value="java">Java books
	        <input type="checkbox" id="net" name="net" value="net">.NET books
	        <br><br>
-->
	        	        
	        <label>&nbsp;</label>
	        <input type="submit" id="join" name="join" value="Join our List">
	        <input type="reset" id="reset" name="reset" value="Reset"><br>
	    </form>
    </main>
</body>
</html>