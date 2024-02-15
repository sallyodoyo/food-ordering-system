<?php 
session_start();


require_once("component.php");


$conn = mysqli_connect("localhost", "root", "", "thehealthybar");

if (isset($_POST['remove']))
 {
	if ($_GET['action']=='remove') 
	{
		foreach ($_SESSION['cart'] as $key => $value) 
		{
			if ($value["product_id"]==$_GET['id'])
			 {
				unset($_SESSION['cart'][$key]);
				

			}
		}
	}
}


 ?>

 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CART</title>
	<link rel="stylesheet" href="css/order.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body style="font-family: inherit;">
	<div class="header1" >
			  <h1>the healthy bar</h1>
				</div>
	<header>
		<div class="nav">
				
				<ul class="navigation">
					<li><a href="healthybarwelcome.php">Home</a></li>
					<!-- <li><a href="menu.php">Menu</a></li> -->
					<li><a href="about_us.php">About Us</a></li>
					<li><a href="order.php">Order Online</a></li>
					
				</ul>
				

				<ul class="navigation2">
						<li> <a href="cart.php" class="nav-item nav-link active">
                <h5 class="px-5 cart">
                    <i class="fa fa-shopping-cart"></i>Cart
                    <?php 
                        if (isset($_SESSION['cart'])) 
                        {
                            $count=count($_SESSION['cart']);
                           echo"<span id=\"cart-count\" class=\"text-warning bg-light\" style=\"text-align:center;padding: 0rem 0.9rem 0.1rem 0.9rem;border-radius: 3rem;\" > $count </span>";
                        }else
                            {
                                echo"<span id=\"cart-count\" class=\"text-warning bg-light\" style=\"text-align:center;padding: 0rem 0.9rem 0.1rem 0.9rem;border-radius: 3rem;\"> 0 </span>";
                            }


                     ?>

                </h5>

            </a></li>
					<?php echo "<font color = #e07719, font size = 4px, font family = inherit;> Hello " .$_SESSION["User"];?>

					<li><a href="logout.php">Log Out</a></li>
					
				</ul>

             </div>
			
	</header>


	<section>

 <div class="container-fluid">
 	
 	<div class="row pc-5" >
 		<div class="col-md-6" >
 			<div class="shopping-cart" >
 				<h6 class="text-capitalize" style="color: blue; font-size: 30px; text-align: centre; color: #e07719; font-family: inherit;"><?=  $_SESSION ['User'] ?>'s Cart</h6>
 				<hr>
					<?php 
					$total=0;
					if (isset($_SESSION['cart'])) 
					{
						$product_id=array_column($_SESSION['cart'],'product_id');

                        $result = mysqli_query($conn, "SELECT * FROM products");
					while ($row=mysqli_fetch_assoc($result)) 
					{
						foreach ($product_id as $id) 
						{
							if ($row['productid']==$id) 
							{
								cartElement($row['productimage'],$row['productname'],$row['productprice'],$row['productid']);

									$total=$total+(int)$row['productprice'];
									$prize=$row['productprice'];
									$iad = $_SESSION['User'];
									$img=$row['productimage'];
									$namee = $row['productname'];
									

									// $sql = "INSERT INTO orderss (productname,productprice)VALUES('$namee','$prize')";
									// 	mysqli_query($conn, $sql);		
								
							}
						}
					}
					}
					else
					{
						echo "<h5>Your healthy bar cart is empty!:(</h5>";
					}


					 ?>

 				<hr>
 			</div>

 		</div>
 		<div class="col-md-4 offset-md-1 border rounded mt-5  h-25">
 			<div class="pt-4">
 				<h6>PRICE DETAILS</h6>
 				<hr>

 				<div class="row price-details">
 					<div class="col-md-6">
 						<?php 
 						if (isset($_SESSION['cart'])) 
 						{
 							$count=count($_SESSION['cart']);
 							echo "<h6>Price ($count items)</h6>";
 						}
 						else
 						{
 							echo "<h6>Price (0 items)</h6>";
 						}

 						 ?>

 						 
 						 <hr>
							<h6>Amount Payable</h6>
							<hr>

 					</div>
 					<div class="col-md-6">
 						
 						<h6>Ksh <?php echo ($total); ?></h6>
 						
 						<hr>
 							<h6>Ksh <?php echo ($total); ?></h6>
 							<hr>
 					</div>
 				</div>
 			</div>
			<form action="" method="post">
			<button type="submit" name="submitOrder" style="background: #070930!important; color: #e07719;" class="btn btn-block boton  text-uppercase contact-btn"><i class="far fa-hand-point-right mr-2" ></i>Submit Order</button>
			<hr>
			</form>
 		</div>
 		<?php
 			if (isset($_POST['submitOrder'])) {

 				echo "<script>alert('Order Submitted!')</script>";
 				echo "<script>window.location='cart2.php'</script>";

 				$tootal=$total;
 				$iad = $_SESSION['User'];
 				$totalid=$iad.$tootal;



 				
 				$sql = "INSERT INTO orderss (Client_name,orderid,total)VALUES('$iad','$totalid','$tootal')";
				mysqli_query($conn, $sql);	




 			}


 		?> -->
	

 	</div>
 
 </div>


</section>
</body>

	
</html>