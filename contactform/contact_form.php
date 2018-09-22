<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <script type="text/javascript" src="register.js"></script>
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
    <h1>Contact Us</h1>
	 <p>Please submit your comments and questions below. Include your email address so that we can get back to you.</p>
    
	 <!--the form here brings in the user email and comments to be processed by the called php page-->
	 <form action="index.php" method="POST"
        name="registration_form" id="registration_form">
		  
				<!-- add a hidden field for an action on return to the index -->
			<input type="hidden" name="action" value="submitForm">
    
        <label for="email_address">E-Mail:</label>
            <input type="text" name="emailAddress" id="emailAddress">
				<?php echo $fields->getField('emailAddress')->getHTML(); ?><br>
            <br>
			<label for="reenterEmail">Reenter Email:</label>
				<input type="text" name="reenterEmail" id="reenterEmail">
				<?php echo $fields->getField('reenterEmail')->getHTML(); ?><br>
				<br>
			<label for="comments">Comments:</label>
            <textarea name="comments" id="comments" rows="5" cols="40"></textarea>
				<?php echo $fields->getField('comments')->getHTML(); ?><br>
            <br>
<!--   i commented this all out becuase i don't intend to use it, but i left it because 
			the javascript still all references it, so if i change my mind and do want to use any of it it will still all work
			
			<label for="phone">Mobile Phone:</label>
            <input type="text" name="phone" id="phone">
            <br>
        <label for="country">Country:</label>
            <select name="country" id="country">
            	<option value="">Select an option</option>
                <option>USA</option>
                <option>Canada</option>
                <option>Mexico</option>
            </select>
            <br>
        <label>Contact me by:</label>         
            <input type="radio" name="contact" id="text" value="text" checked>Text
            <input type="radio" name="contact" id="email" value="email">Email
            <input type="radio" name="contact" id="mobile" value="mobile">Mobile phone
            <input type="radio" name="contact" id="none" value="none">Don't contact me
        <br>
        <label>Terms of Service:</label>
            <input type="checkbox" name="terms" id="terms" value="yes">I accept
            <br>
-->
        <input type="submit" id="submit" value="Contact">
        <input type="button" id="reset_form" value="Reset">
    </form>
    <h2 id="registration_header">&nbsp;</h2>
    <table id="registration_info"></table>
</main>
</html>