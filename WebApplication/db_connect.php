<?php
	function connect(){
		$dbserver = "localhost";
		$dbuser = "root";
		$dbpass = "";
		$dbname = "thehealthybar";
		$link = mysqli_connect($dbserver,$dbuser,$dbpass,$dbname) or die("Couldn't connect");
		return $link;
	}
    
    function getData($sql){
    	$link=connect();
    	$result=mysqli_query($link,$sql);
    	while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
    	/*while($row=mysqli_fetch_array($result)){
    		$rows[]= $row;
    	}
    	return $rows;*/
    }

    function setData($sql){
    	$link=connect();
    	if(mysqli_query($link,$sql)){
    		echo "item inserted";
    	}
    	else{
    		echo "item not inserted".mysqli_error($link);
    	}

    }

    function numRows($sql) {
		$result  = mysqli_query($link,$sql);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
?>

<!-- <?php
/* class DBController {
	private $host = "localhost";
	private $user = "root";
	private $password = "test";
	private $database = "blog_samples";
	private $conn;
	
	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
}*/
?>  -->