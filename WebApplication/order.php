<?php
session_start();
require_once('component.php');

$conn=mysqli_connect("localhost","root","","thehealthybar");

if(isset($_POST['add']))
 {
 	if(isset($_SESSION['cart']))
 	{


 	$item_array_id=array_column($_SESSION['cart'], "product_id");

 	if (in_array($_POST['product_id'],$item_array_id)) 
 	{
 		echo "<script>alert('Product has already been added in the cart...!')</script>";
 		echo "<script>window.location='order.php'</script>";
 	}

 	else
 	{
 		$count=count($_SESSION['cart']);
 		$item_array=array('product_id'=>$_POST['product_id']);

 		$_SESSION['cart'][$count]=$item_array;
 		

 	}
 	//print_r($_POST['product_id']);
	


 	

 	}else
 		{
 			$item_array=array('product_id'=>$_POST['product_id']);

 			//create new session variable
 			$_SESSION['cart'][0]=$item_array;
 			print_r($_SESSION['cart']);
 		}
 }


?>

 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ORDER</title>
	<link rel="stylesheet" href="css/order.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body style="font-family: inherit;">
	<div class="header1">
			  <h1>the healthy bar</h1>
				</div>
	
		<nav class="navbar navbar-inverse">
		
			
						
				<ul class="navigation">
					<li><a href="healthybarwelcome.php">Home</a></li>
<!-- 				<li><a href="menu.php">Menu</a></li>
 -->				<li><a href="about_us.php">About Us</a></li>
					<li><a href="order.php">Order Online</a></li>
					
					

					
					
				</ul>
				

				<ul class="navigation2 navbar-right">
						<li> <a href="cart.php" class="nav-item nav-link active">
                <h5 class="px-5 cart">
                    <i class="fa fa-shopping-cart"></i>Cart
                    <?php 
                        if (isset($_SESSION['cart'])) 
                        {
                            $count=count($_SESSION['cart']);
                           echo"<span id=\"cart-count\" class=\"text-warning bg-light\" style=\"text-align:center;padding: 0rem 0.9rem 0.1rem 0.9rem;border-radius: 3rem;\"> $count </span>";
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

            
             </nav>
			
	

	

<div class="container">
	<div class="row text-center py-5" style="padding-bottom: 20px;!important">
		<?php
		
        $result = mysqli_query($conn, "SELECT * FROM products");
		while($row=mysqli_fetch_assoc($result))
		{
			component($row['productname'],$row['productprice'],$row['productimage'],$row['productid']);
			
		}


		?>

	</div>

</div>
</body>

	
</html>