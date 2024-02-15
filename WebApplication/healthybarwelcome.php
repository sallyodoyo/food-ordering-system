<?php 
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HOME PAGE</title>
	<link rel="stylesheet" href="css/healthy.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
	<header>
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
			<h1>Welcome to The healthy bar!</h1><br>
			<div class="menu-btn">
					<a href="order.php">ORDER</a>
				
			</div>
	</div>
	

	</main>

		<footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>company</h4>
  	 			<ul>
  	 				<li><a href="#">about us</a></li>
  	 				<li><a href="#">our services</a></li>
  	 				<li><a href="#">privacy policy</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>get help</h4>
  	 			<ul>
  	 				<li><a href="#">FAQ</a></li>
  	 				<li><a href="#">deliveries</a></li>
  	 				<li><a href="#">returns</a></li>
  	 				<li><a href="#">order status</a></li>
  	 				<li><a href="#">payment methods</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>order online</h4>
  	 			<ul>
  	 				<li><a href="#">Meals</a></li>
					<li><a href="#">Fresh juices</a></li>
					<li><a href="#">Healthy Bar Smoothies</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>

	</body>

	
</html>