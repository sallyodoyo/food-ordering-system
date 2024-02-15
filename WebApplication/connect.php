
<?php
$conn = new mysqli("localhost","root","","thehealthybar");

if ($conn-> connect_error) 
{
	die("Faied to connect!".$conn-> connect_error);
}
else{
	// echo "Connected succesfully";
	echo "<br>";
}
?>