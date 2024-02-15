<?php 
	//session_start();

	$mysqli = mysqli_connect('localhost', 'root', '', 'thehealthybar');

	// initialize variables
	$id = 0;
	$username = "";
	$email_address = "";
	$phone = "";
	$address = "";
	$paymentmethod = "";


	if (isset($_POST['placeorder'])) {

		$id = $_POST['orderid'];
		$username = $_POST['username'];
		$email_address = $_POST['email_address'];
		$phone =  $_POST['phone'];
		$address =  $_POST['address'];
		$paymentmethod = $_POST['paymentmethod'];
		
		
		mysqli_query($mysqli, "INSERT INTO orders (id, username, email_address, phone, address, paymentmethod  ) VALUES ('$orderid', '$username', '$email_address', '$phone', '$address', '$paymentmethod')") ; 

		$_SESSION['message'] = "Your Order has successfully been placed!"; 
		header('location: checkout.php');
		$_SESSION['msg_type'] = "Success!";

		

	}

	if (isset($_POST['checkout'])) {

		$id = $_POST['orderid'];
		$username = $_POST['username'];
		$email_address = $_POST['email_address'];
		$phone =  $_POST['phone'];
		$address =  $_POST['address'];
		$paymentmethod = $_POST['paymentmethod'];
		
		
		mysqli_query($mysqli, "INSERT INTO orders (id, username, email_address, phone, address, paymentmethod  ) VALUES ('$orderid', '$username', '$email_address', '$phone', '$address', '$paymentmethod')") ; 

		$_SESSION['message'] = "Kindly fill in the order details!"; 
		header('location: checkout.php');
		$_SESSION['msg_type'] = "Success!";
	}
	
?>	