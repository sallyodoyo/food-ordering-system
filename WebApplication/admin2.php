<!--129197 SALLY KEJU ICSB2-->
<?php include('connectadmin.php'); ?>

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
	<title>Admin page</title>
	<link rel="stylesheet"  href="css/admin2.css">
</head>
<body>
	
		
			<div class="header1">
			  <h1>the healthy bar</h1>
				</div>
				<nav class="navbar navbar-inverse">
						
				<ul class="navigation">
					
					<li><a href="admin2.php">Edit Users</a></li>
					<li><a href="editmenu.php">Edit Menu</a></li>
					<li><a href="vieworders.php">Orders</a></li>
					
				

			
					<?php echo "<font color = #e07719, font size = 4px, font family = inherit;> Hello " .$_SESSION["User"];?>

					<li><a href="logout.php">Log Out</a></li>
					
				</ul>

					</nav>			
		

	


<!--CLIENTS-->
<?php $results = mysqli_query($mysqli, "SELECT * FROM clients"); ?>
<table>
	<thead>
		<tr>
			<th>username</th>
			<th>usertype</th>
			<th>email_address</th>
			<th>password</th>
			<th>confirm_password</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)):  ?>
		<tr>
			<td><?php echo $row['username']; ?></td>
			<td><?php echo $row['user_type']; ?></td>
			<td><?php echo $row['email_address']; ?></td>
			<td><?php echo $row['password']; ?></td>
			<td><?php echo $row['confirm_password']; ?></td>
			<td>
				<a href="admin2.php?edit=<?php echo $row['user_id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="connectadmin.php?delete=<?php echo $row['user_id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php endwhile; ?>
</table>


<form method="post" action="connectadmin.php" >

		<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">

		
		<div class="input-group">
			<h2>EDIT BAR</h2>
			<label>Userame:</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
			<br><br>
		</div>

		<div class="input-group">
			<label>Email Address:</label>
		<input type="text" name="email_address" value="<?php echo $email_address; ?>">
			<br><br>
		</div>

		<div class="input-group">
			<label>Password:</label>
		<input type="text" name="password" value="<?php echo $password; ?>">
			<br><br>
		</div>

		<div class="input-group">
			<label>Confirm Password:</label>
		<input type="text" name="confirm_password" value="<?php echo $confirm_password; ?>">
			<br><br>
		</div>

		<div class="form-group lead">
				<label for="usertype">I'm a :</label>
				<input type="radio"  name="usertype"  value="client" class="custom-radio" required>&nbsp;Client |
				<input type="radio"  name="usertype"  value="admin" class="custom-radio" required>&nbsp;Admin 
				
				</div>

		<div class="input-group">
			<?php if ($update == true): ?>
				<button class="btn" type="submit" name="update" style="background: #556B2F;" >Update</button>
			<?php else: ?>
				<button class="btn" type="submit" name="save">Save</button>
			<?php endif ?>

	

	</form>
	


</body>
</html>