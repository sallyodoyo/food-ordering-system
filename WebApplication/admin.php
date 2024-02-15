<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin</title>
	<link rel="stylesheet" href="css/admin.css">
</head>
<body>
	<header>
		<div class="wrapper">
			<div class="header1">
			  <h1>the healthy bar</h1>
			  
				</div>
						
				<ul class="navigation">
					<li><a href="admin.php">Clients</a></li>
					<li><a href="admin2.php">Edit Users</a></li>
					<li><a href="#">Menu</a></li>
					<li><a href="#">Orders</a></li>
					
				</ul>

				<!--<ul class="navigation2">
					<li><a href="loginregistration.html">Log In </a></li>
					<li><a href="loginregistration.html">Sign Up</a></li>
					
				</ul>-->

								
		</div>

	</header>

	

	<?php

	$link = mysqli_connect("localhost", "root", "", "thehealthybar");

	if($link === false){
    die("ERROR: Connection failed. " . mysqli_connect_error());
		}

//$row=$results->fetch_assoc();

echo"<br>";
echo"<h2> CLIENTS </h2>";
echo"<br>";

$sql = "SELECT * FROM clients ";

if ($result=mysqli_query($link,$sql)){
	if(mysqli_num_rows($result)>0){
		echo "<table>";
			echo"<tr>";
				echo"<th>user_id</th>";
				echo"<th>username</th>";
				echo"<th>email_address</th>";
				echo"<th>password</th>";
				echo"<th>confirm_password</th>";
			echo"</tr>";
	while($row= mysqli_fetch_array($result)){
		echo"<tr>";
			echo"<td>" . $row["user_id"] . "</td>";
			echo"<td>" . $row["username"] . "</td>";
			echo"<td>" . $row["email_address"] . "</td>";
			echo"<td>" . $row["password"] . "</td>";
			echo"<td>" . $row["confirm_password"] . "</td>";
		echo"</tr>";
	}	//ee_result($result);

	echo "</table>";
	
	mysqli_free_result($result);		
				
	}else{
		echo "No records matching your query were found.";
	}
}else{
	echo "ERROR: Unable to execute $sql. " . mysqli_error($link);
}
//mysqli_close($link);

echo"<br><br><br>";

echo"<h2> ADMINISTRATORS </h2>";
echo"<br>";

$sql = "SELECT * FROM administrators ";

if ($result=mysqli_query($link,$sql)){
	if(mysqli_num_rows($result)>0){

		echo "<table>";
			echo"<tr>";
				echo"<th>admin_id</th>";
				echo"<th>name</th>";
				echo"<th>email_address</th>";
				echo"<th>phone_no</th>";
				echo"<th>password</th>";
			echo"</tr>";
	while($row= mysqli_fetch_array($result)){
		echo"<tr>";
			echo"<td>" . $row["admin_id"] . "</td>";
			echo"<td>" . $row["name"] . "</td>";
			echo"<td>" . $row["phone_no"] . "</td>";
			echo"<td>" . $row["email_address"] . "</td>";
			echo"<td>" . $row["password"] . "</td>";
			
		echo"</tr>";
	}	//ee_result($result);

	echo "</table>";
	
	mysqli_free_result($result);		
				
	}else{
		echo "No records matching your query were found.";
	}
}else{
	echo "ERROR: Unable to execute $sql. " . mysqli_error($link);
}
//mysqli_close($link);

echo"<br><br><br>";

echo"<h2> EMPLOYEES </h2>";
echo"<br>";

$sql = "SELECT * FROM employees ";

if ($result=mysqli_query($link,$sql)){
	if(mysqli_num_rows($result)>0){
		echo "<table>";
			echo"<tr>";
				echo"<th>employee_id</th>";
				echo"<th>name</th>";
				echo"<th>email_address</th>";
				echo"<th>phone_no</th>";
				echo"<th>password</th>";
			echo"</tr>";
	while($row= mysqli_fetch_array($result)){
		echo"<tr>";
			echo"<td>" . $row["employee_id"] . "</td>";
			echo"<td>" . $row["name"] . "</td>";
			echo"<td>" . $row["phone_no"] . "</td>";
			echo"<td>" . $row["email_address"] . "</td>";
			echo"<td>" . $row["password"] . "</td>";
			
		echo"</tr>";
	}	//ee_result($result);

	echo "</table>";
	echo"<br><br>";
	
	mysqli_free_result($result);		
				
	}else{
		echo "No records matching your query were found.";
	}
}else{
	echo "ERROR: Unable to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);



	?>


</body>
</html>