<?php

$conn=mysqli_connect("localhost","root","","thehealthybar");

if (!$conn) 
{
    die("CONNECTION FAILED".mysqli_connect_error());
        echo "<br>";
}
else{
    echo "CONNECTION SUCCESSFUL";
    echo "<br>";
}

/*$conn = new mysqli("localhost","root","","thehealthybar");

if ($conn-> connect_error) 
{
    die("CONNECTION FAILED".$conn-> connect_error);
}
else{
    echo "CONNECTION SUCCESSFUL";
    echo "<br>"; 
}*/

$sql="CREATE DATABASE IF NOT EXISTS thehealthybar";


if ($conn->query($sql)===TRUE) {
    echo "DATABASE CREATED SUCCESSFULLY";
    echo "<br>";
}
else{
    echo "Error".$conn-> error;
}

$sql_table="CREATE TABLE IF NOT EXISTS clients (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(15) NOT NULL,
    user_type VARCHAR(255) NOT NULL,
    email_address VARCHAR(20) NOT NULL,
    password VARCHAR(10) NOT NULL,
    confirm_password VARCHAR(10) NOT NULL
)";
if ($conn->query($sql_table)===TRUE) {
    echo "TABLE CREATED SUCCESSFULLY";
    echo "<br>";
}
else{
    echo "Error".$conn-> error;
}

if(isset($_POST["Signup"])){
    
$username = $_POST["username"];
$user_type ="client" ;
$email_address = $_POST["email_address"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];

if ($_POST["password"] === $_POST["confirm_password"]) {
   echo "passwords match";
   echo "<br>";
}
else {
   echo "passwords don't match";
   echo "<br>";
}

echo "<br>";


$sql_insert = "INSERT INTO clients (username,user_type, email_address, password, confirm_password) VALUES ('$username','$user_type', '$email_address','$password', '$confirm_password')";

    if($conn->query($sql_insert) ){
        echo "Inserted Successfully";
    header('location:loginregistration.php');
    }
    else{
        echo "INSERTION FAILED". $conn->error;
    }
}

    $sql_select="SELECT* FROM clients";

    $results=$conn->query($sql_select);

    print_r($results);

    

