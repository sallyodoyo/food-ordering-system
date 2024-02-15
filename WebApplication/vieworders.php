<?php
session_start();
require_once('connect.php'); ?>


<?php if (isset($_SESSION['message'])): ?>
			<div class="msg">
				<?php 
					echo $_SESSION['message']; 
					unset($_SESSION['message']);
				?>
			</div>
		<?php endif ?>

<?php?>

<?php 
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>View Orders</title>
	<link rel="stylesheet"  href="css/admin2.css">
</head>
<body style="font-family: inherit;
  font-size: 20px;">
	<header>
		<div class="wrapper">
			<div class="header1">
			  <h1>the healthy bar</h1>
				</div>
						
				<ul class="navigation">
					
					<li><a href="admin2.php">Edit Users</a></li>
					<li><a href="editmenu.php">Edit Menu</a></li>
					<li><a href="vieworders.php">Orders</a></li>
					
				
					
				</ul>
				<ul class="navigation2" style="padding-top: 10px;">
					<?php echo "<font color = #e07719, font size = 4px, font family = inherit;> Hello " .$_SESSION["User"];?>

					<li><a href="logout.php">Log Out</a></li>
				</ul>

								
		</div>

	</header>


<!--CLIENTS-->
<?php $results = mysqli_query($conn, "SELECT * FROM orderss"); ?>
<table>
	<thead>
		<tr>
			<th>Client Name</th>
			<th>Order ID</th> 
			<th>Product Name</th>
			<th>Product Price</th>
			<th>Total</th>
			
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)):  ?>
		<tr>
			<td><?php echo $row['Client_name']; ?></td>
			 <td><?php echo $row['orderid']; ?></td>
			<td><?php echo $row['productname']; ?></td>
			<td><?php echo $row['productprice']; ?></td>
			<td><?php echo $row['total']; ?></td>
			
		</tr>
	<?php endwhile; ?>
</table><hr>



	


</body>
</html>