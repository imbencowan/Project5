<?php //include '../view/header.php'; 
			//the links in the header currently don't work here because they're all relative
				//so we'll just hard code that for now.
					//no we can't do that either, because we don't know which directory we're in here
					//so we can't format the links. this is what we get, working with a fake site, 
					//that doesn't have a domain to reference an absolute link from.
?>
<!-- prepare to view our copy and pasted and then edited with php header -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Error</title>
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
	<header>
		<h1>Outdoorsite</h1>
	</header>
	<!--the nav bar!-->
	<nav>
		<ul>
			<a href="../index.html"><li>Home</li></a>
			<?php if ($caller == 'newsletter') : ?>
				<a href="index.html"><li>Newsletter</li></a>
				<a href="../contactform/index.html"><li>Contact Us</li></a>
			<?php endif; ?>
			<?php if ($caller == 'contact') : /*there's no way $caller could have both these values and i would need an else in between here, right?*/?>
				<a href="../newslettersignup/index.html"><li>Newsletter</li></a>
				<a href="index.html"><li>Contact Us</li></a>
			<?php endif; ?>
		</ul>
	</nav>
	<main>
<!-- end copy and pasted and edited header -->
<!-- note: this was not a nice way to do this, but it will work for tonight -->
<div>
    <h1>Database Error</h1>
    <p class="first_paragraph">There was an error connecting to the database.</p>
    <p>Please try again later.</p>
</div>
<?php include '../view/footer.php'; ?>