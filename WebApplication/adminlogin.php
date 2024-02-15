<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login and Signup form</title>
	<link rel="stylesheet" href="css/logreg.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>
	<header>
		<div class="wrapper">
									
				<ul class="navigation">
					<li><a href="healthybar.php">Home</a></li>
					<li><a href="contact_us.html">Help</a></li>
				</ul>
									
		</div>

	</header>

	<div class="hero">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">Log In</button>
				<!--<button type="button" class="toggle-btn" onclick="signup()">Sign Up</button>-->
				
			</div>
			<div class="social-icons">
			<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 		<a href="#"><i class="fab fa-twitter"></i></a>
  	 		<a href="#"><i class="fab fa-instagram"></i></a>
  	 		<a href="#"><i class="fab fa-linkedin-in"></i></a>
		</div>

			<!--LOGIN PAGE-->
		 <form action="connectlogin.php" id="login" class="input-group"  method="post">
		 	<input type="text" class="input-field" name="username" placeholder="Username" required>
		 	<input type="password" class="input-field" name="password" placeholder="Enter Password" required>
		 	<!--<input type="checkbox" class="check-box"><span>Remember password</span>-->
		 	<input type="submit" class="submit-btn" value="Log In" name="Login">
		 	



		 </form>

		 	<!--SIGNUP PAGE/REGISTRATION-->
		 <!--<form action="connectsignup.php" method="post"  id="signup" class="input-group">
		 	<input type="text" class="input-field" name="username" placeholder="Username" required>
		 	<input type="text" class="input-field" name="email_address" placeholder="Email Address" required>
		 	<input type="password" class="input-field" name="password" placeholder="Password" required>
		 	<input type="password" class="input-field" name="confirm_password" placeholder="Confirm Password" required>
		 	<input type="checkbox" class="check-box"><span>I agree to the terms and conditions</span>
		 	<input type="submit" class="submit-btn" value="Sign up" name="Signup" >
		 </form>-->
		</div>
		
		
	</div>
	<!--<script>
		var x = document.getElementById("login");
		var y = document.getElementById("signup");
		var z = document.getElementById("btn");

		function signup() {
			x.style.left = "-400px";
			y.style.left = "50px";
			z.style.left = "110px";
		}
		
		function login() {
			x.style.left = "50px";
			y.style.left = "450px";
			z.style.left = "0";
		}
	</script>-->

</body>
</html>