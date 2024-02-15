<?php
session_start();
$message="";

require_once("connect.php");




if (isset($_POST["Login"])) 
{
	$User_name=$_POST["username"];
	$Password=$_POST["password"];
	
	$sql="SELECT *from clients where username=? AND password=?";

	$stmt=$conn->prepare($sql);
	$stmt->bind_param("ss",$User_name,$Password);
	$stmt->execute();
	$result=$stmt->get_result();
	$row=$result->fetch_assoc();

	

	session_regenerate_id();
	$_SESSION['User']=$row['username'];
	$_SESSION['role']=$row['user_type'];
	session_write_close();

	if ($result->num_rows==1 && $_SESSION['role']=="client") 
	{
		header("location: healthybarwelcome.php");
	}
	else if ($result->num_rows==1 && $_SESSION['role']=="admin") 
	{
		header("location:admin2.php");
	}
	else
	{
		//header('location:test.php');
		//$_SESSION['message']="Username or Password is Incorrect!";
		//$_SESSION['msg_type']="danger";
		echo "<script>alert('Username or Password is Incorrect!')</script>";
 		echo "<script>window.location='loginregistration.php'</script>";
	}
}




?>