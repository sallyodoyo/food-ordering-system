<?php 
session_start();

?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>HEALTHY BAR MENU</title>
		<link rel="stylesheet" type="text/css" href="css/menu.css">
	</head>
	<body>
		<header>
			<div class="wrapper">
				<div class="header1">
				  <h1>the healthy bar</h1>
					</div>
							
					<ul class="navigation">
						<li><a href="healthybarwelcome.php">Home</a></li>
						<li><a href="menu.php">Menu</a></li>
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
			<div class="container">
				<div class="menu">
					<h2 class="menu_group_heading">
						MEALS
					</h2>
					<div class="menu_group">
						<div class="menu_item">
							<img src="img/meal1.jfif" alt="Garlic chicken" class="menu_item_image">
							<div class="menu_item_text">
								<h3 class="menu_item_heading">
									<span class="menu_item_name">Garlic Chicken</span>
									<span class="menu_item_name_price">Ksh. 1000</span>
								</h3>
								<p class="menu_item_description">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. 
									
								</p>
								
							</div>
							
						</div>
						<div class="menu_item">
							<img src="img/meal2.jpg" alt="Ceasar Salad" class="menu_item_image">
							<div class="menu_item_text">
								<h3 class="menu_item_heading">
									<span class="menu_item_name">Ceasar Salad</span>
									<span class="menu_item_name_price">Ksh. 700</span>
								</h3>
								<p class="menu_item_description">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. 
									
								</p>
								
							</div>
							
						</div>
						<div class="menu_item">
							<img src="img/veggiesoup.jfif" alt="Veggie Soup" class="menu_item_image">
							<div class="menu_item_text">
								<h3 class="menu_item_heading">
									<span class="menu_item_name">Veggie Soup</span>
									<span class="menu_item_name_price">Ksh. 500</span>
								</h3>
								<p class="menu_item_description">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. 
									
								</p>
								
							</div>
							
						</div>
						<div class="menu_item">
							<img src="img/sandwich.jfif" alt="Club Sandwich" class="menu_item_image">
							<div class="menu_item_text">
								<h3 class="menu_item_heading">
									<span class="menu_item_name">Club Sandwich</span>
									<span class="menu_item_name_price">Ksh. 600</span>
								</h3>
								<p class="menu_item_description">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. 
									
								</p>
								
							</div>
							
						</div>
						<div class="menu_item">
							<img src="img/pasta.jfif" alt="Creamy Pasta & Brocolli" class="menu_item_image">
							<div class="menu_item_text">
								<h3 class="menu_item_heading">
									<span class="menu_item_name">Creamy Pasta & Brocolli</span>
									<span class="menu_item_name_price">Ksh. 1100</span>
								</h3>
								<p class="menu_item_description">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. 
									
								</p>
								
							</div>
							
						</div>
						<div class="menu_item">
							<img src="img/fruitsalad.jfif" alt="Fruit Salad" class="menu_item_image">
							<div class="menu_item_text">
								<h3 class="menu_item_heading">
									<span class="menu_item_name">Fruit Salad</span>
									<span class="menu_item_name_price">Ksh. 600</span>
								</h3>
								<p class="menu_item_description">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. 
									
								</p>
								
							</div>
							
						</div>
						
					</div>
					<h2 class="menu_group_heading">
						FRESH JUICES
					</h2>
					<div class="menu_group">
						<div class="menu_item">
							<img src="img/passion.jfif" alt="Classic Passion" class="menu_item_image">
							<div class="menu_item_text">
								<h3 class="menu_item_heading">
									<span class="menu_item_name">Classic Passion</span>
									<span class="menu_item_name_price">Ksh. 300</span>
								</h3>
								<p class="menu_item_description">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. 
									
								</p>
								
							</div>
							
						</div>
						<div class="menu_item">
							<img src="img/mango.jfif" alt="Classic Mango" class="menu_item_image">
							<div class="menu_item_text">
								<h3 class="menu_item_heading">
									<span class="menu_item_name">Classic Mango</span>
									<span class="menu_item_name_price">Ksh. 300</span>
								</h3>
								<p class="menu_item_description">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. 
									
								</p>
								
							</div>
							
						</div>
						<div class="menu_item">
							<img src="img/berryblast.jfif" alt="Berry Blast" class="menu_item_image">
							<div class="menu_item_text">
								<h3 class="menu_item_heading">
									<span class="menu_item_name">Berry Blast</span>
									<span class="menu_item_name_price">Ksh. 400</span>
								</h3>
								<p class="menu_item_description">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. 
									
								</p>
								
							</div>
							
						</div>
						<div class="menu_item">
							<img src="img/cocktail.jfif" alt="Tropical Cocktail" class="menu_item_image">
							<div class="menu_item_text">
								<h3 class="menu_item_heading">
									<span class="menu_item_name">Tropical Cocktail</span>
									<span class="menu_item_name_price">Ksh. 400</span>
								</h3>
								<p class="menu_item_description">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. 
									
								</p>
								
							</div>
							
						</div>
						<div class="menu_item">
							<img src="img/lemonade.jfif" alt="Lemonade" class="menu_item_image">
							<div class="menu_item_text">
								<h3 class="menu_item_heading">
									<span class="menu_item_name">Lemonade</span>
									<span class="menu_item_name_price">Ksh. 400</span>
								</h3>
								<p class="menu_item_description">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. 
									
								</p>
								
							</div>
							
						</div>
						<div class="menu_item">
							<img src="img/pinemint.jfif" alt="Pineapple Mint" class="menu_item_image">
							<div class="menu_item_text">
								<h3 class="menu_item_heading">
									<span class="menu_item_name">Pineapple Mint</span>
									<span class="menu_item_name_price">Ksh. 400</span>
								</h3>
								<p class="menu_item_description">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. 
									
								</p>
								
							</div>
							
						</div>
						<h2 class="menu_group_heading">
						HEALTHY BAR SMOOTHIES
					</h2>
					<div class="menu_group">
						<div class="menu_item">
							<img src="img/peanutbutter.jfif" alt="Peanut Butter" class="menu_item_image">
							<div class="menu_item_text">
								<h3 class="menu_item_heading">
									<span class="menu_item_name">Peanut Butter</span>
									<span class="menu_item_name_price">Ksh. 700</span>
								</h3>
								<p class="menu_item_description">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. 
									
								</p>
								
							</div>
							
						</div>
						<div class="menu_item">
							<img src="img/blueberry.jfif" alt="Blueberry" class="menu_item_image">
							<div class="menu_item_text">
								<h3 class="menu_item_heading">
									<span class="menu_item_name">Blueberry</span>
									<span class="menu_item_name_price">Ksh. 750</span>
								</h3>
								<p class="menu_item_description">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. 
									
								</p>
								
							</div>
							
						</div>
						<div class="menu_item">
							<img src="img/banana.jfif" alt="Banana Split" class="menu_item_image">
							<div class="menu_item_text">
								<h3 class="menu_item_heading">
									<span class="menu_item_name">Banana Split</span>
									<span class="menu_item_name_price">Ksh. 650</span>
								</h3>
								<p class="menu_item_description">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. 
									
								</p>
								
							</div>
							
						</div>
						<div class="menu_item">
							<img src="img/green.jfif" alt="Tropical Green" class="menu_item_image">
							<div class="menu_item_text">
								<h3 class="menu_item_heading">
									<span class="menu_item_name">Tropical Green</span>
									<span class="menu_item_name_price">Ksh. 600</span>
								</h3>
								<p class="menu_item_description">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. 
									
								</p>
								
							</div>
							
						</div>
				</div>
			</div>

			
		</main>



	</body>
	</html>