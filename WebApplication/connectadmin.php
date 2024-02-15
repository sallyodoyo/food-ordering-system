<?php 
	session_start();

	$mysqli = mysqli_connect('localhost', 'root', '', 'thehealthybar');

	// initialize variables
	$user_id = 0;
	$username = "";
	$email_address = "";
	$password = "";
	$confirm_password = "";
	$update = false;

	if (isset($_POST['save'])) {
		$username = $_POST['username'];
		$email_address = $_POST['email_address'];
		$password =  $_POST['password'];
		$confirm_password =  $_POST['confirm_password'];
		$user_type =  $_POST['usertype'];


		mysqli_query($mysqli, "INSERT INTO clients (username,usertype, email_address, password, confirm_password  ) VALUES ('$username','$user_type', '$email_address', '$password', '$confirm_password')") ; 

		$_SESSION['message'] = "Client's records saved!"; 
		header('location: admin2.php');
		$_SESSION['msg_type'] = "Success!";

	}

	

if (isset($_GET['edit'])) {
		$user_id = $_GET['edit'];
		$update = true;
		$result = mysqli_query($mysqli, "SELECT * FROM clients WHERE user_id = $user_id") or die($mysqli->error) ;

		if (mysqli_num_rows($result)==1) {
			$row = mysqli_fetch_array($result);
			$username = $row['username'];
			$email_address = $row['email_address'];
			$password = $row['password'];
			$confirm_password = $row['confirm_password'];
		}

	}

	if (isset($_POST['update'])) {
	$user_id = $_POST['user_id'];
	$username = $_POST['username'];
		$email_address = $_POST['email_address'];
		$password =  $_POST['password'];
		$confirm_password =  $_POST['confirm_password'];
		$user_type =  $_POST['usertype'];

	mysqli_query($mysqli, "UPDATE clients SET username='$username',user_type='$user_type', email_address='$email_address', password='$password', confirm_password='$confirm_password'  WHERE user_id=$user_id");

	$_SESSION['message'] = "Client's record updated!"; 
	header('location: admin2.php');
}

if (isset($_GET['del'])) {
	$user_id = $_GET['del'];
	mysqli_query($mysqli, "DELETE FROM clients WHERE user_id=$user_id") ;

	$_SESSION['message'] = "Client's record deleted!"; 
	$_SESSION['msg_type'] = "danger";
	header('location: admin2.php');
}

?>