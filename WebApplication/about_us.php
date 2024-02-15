<?php 
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ABOUT US</title>
	<link rel="stylesheet" type="text/css" href="css/about_us.css">
</head>
<body><header>
		<div class="wrapper">
			<div class="header1">
			  <h1>the healthy bar</h1>
				</div>
						
				<ul class="navigation">
					<li><a href="healthybarwelcome.php">Home</a></li>
					<!-- <li><a href="menu.php">Menu</a></li> -->
					<li><a href="about_us.php">About Us</a></li>
					<li><a href="order.php">Order Online</a></li>
					
				</ul>
				

				<ul class="navigation2">
					<?php echo "<font color = #e07719, font size = 4px, font family = inherit;> Hello " .$_SESSION["User"];?>

					<li><a href="logout.php">Log Out</a></li>
					
				</ul>


							
		</div>

	</header>

	<main>
	<div class="intro">
			<h1>About Us</h1>
	</div>

	<div id="about" class="about_us">

     <fieldset>
			<legend></legend>

			<p>Our healthy bar was founded by a group of retired fitness specialists in 2019. The aim of starting up this establishment was share their expertise with not only their clients but also the public.</p><br>

			<p>Do you think fitness is a bore? We're here to show you that being healthy is fun and exciting! What better way to show you this, other than through food!</p><br><br>

			<p>~Eat good, Feel good, Look good!~</p><br>


		</fieldset>		

	</main>

</body>
</html>