<!--129197 SALLY KEJU ICSB2-->


<?php 
session_start();
if (isset($_SESSION['message'])): ?>
			<div class="msg">
				<?php 
					echo $_SESSION['message']; 
					unset($_SESSION['message']);
				?>
			</div>
		<?php endif ?>





 <?php
     $conn=mysqli_connect("localhost","root","","thehealthybar");
  
 $id=0;
$update=false;

$foodname='';
$code='';
$foodprice='';



 

  if(isset($_GET['edit']))
	{
		$id=$_GET['edit'];
		$update=true;


		$result = mysqli_query($conn,"SELECT * FROM products WHERE productid=$id")or die ($conn->error());

    
      $row=$result->fetch_array();
      $foodname=$row['productname'];
      $code=$row['code'];
      $foodprice=$row['productprice'];
      
      # code...
		

		
	}

 if (isset($_POST['update']))
 {
  $id=$_POST['id'];
  $foodname=$_POST['fooditem'];
  $code=$_POST['foodcode'];
  $foodprice=$_POST['price'];
 
  
  $query="UPDATE  products SET productname='$foodname',code='$code',productprice='$foodprice' WHERE productid=$id";
  mysqli_query($conn,$query);

    

  echo "<script>alert('Product Updated')</script>";
    echo "<script>window.location='editmenu.php'</script>";
}




  

if(isset($_GET['delete']))
	{
		$id=$_GET['delete'];
		$conn->query("DELETE FROM products WHERE productid=$id")or die ($conn->error());


        echo "<script>alert('Product Deleted')</script>";
        echo "<script>window.location='editmenu.php'</script>";

	}
if (isset($_POST['submitImage'])) { 

  
    $food_name=$_POST["fooditem"];
    $food_code=$_POST["foodcode"];
    $file=$_FILES["file"];
    $food_price=$_POST["price"];


    $filename = $_FILES["file"]["name"]; 
    $fileTmpName=$_FILES["file"]["tmp_name"];
    $fileSize=$_FILES["file"]["size"];
    $fileError=$_FILES["file"]["error"];
    $fileType=$_FILES["file"]["type"];

    $fileExt= explode('.', $filename);
    $fileActualExt=strtolower(end($fileExt));
    $allowed=array('jpg','jpeg','png','jfif');

    if (in_array($fileActualExt, $allowed)) 
    {
      if ($fileError=== 0)
         {
           if ($fileSize < 10000000) 
              {
                $fileNameNew=uniqid('', true).".".$fileActualExt;

                $folder='img/'.$fileNameNew;

                $fileDestination='img/'.$fileNameNew;
                if(move_uploaded_file($fileTmpName, $fileDestination))
                {
                    echo "<script>alert('Uploaded Succesfully')</script>";
                    echo "<script>window.location='editmenu.php'</script>";
                }else
                {
                    echo "Error";
                }

              }
              else
                  {
                    echo "Your file is too big!";
                  }
        }
        else
        {
          echo "There was an error uploading your file!";
        }
    }
    else
    {
      echo "You cannot upload files of this type!";
    }

    

          

    
        $sql = "INSERT INTO `products`(`productname`,`code`,`productprice`, `productimage`)VALUES ('$food_name','$food_code','$food_price','$folder')";

        mysqli_query($conn, $sql); 

}
  

  $result = mysqli_query($conn, "SELECT * FROM products"); 

?>
	


<!DOCTYPE html>
<html>
<head>
	<title>Edit Menu</title>
	<link rel="stylesheet"  href="css/admin2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
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
					
				<?php echo "<font color = #e07719, font size = 4px, font family = inherit;> Hello " .$_SESSION["User"];?>

					<li><a href="logout.php">Log Out</a></li>
					
				</ul>

								
		</div>

	</header>


	  <section class="Add Food">
       

      
  
  <div >
   <div >
          
            <div >
             <form action="" method="POST" enctype="multipart/form-data">


      <input type="hidden" name="id" value="<?php echo $id; ?>" >
               


                <div >
                  

                  <input type="text"  name="fooditem"  value="<?php echo $foodname; ?>"   required="true" placeholder="Enter food name" id="fooditem" >

                </div>
                <br><br>

                 <div >
                  

                  <input type="text"  name="foodcode"  value="<?php echo $code; ?>"   required="true" placeholder="Enter Code" id="foodcode" >

                </div>
                <br><br>





                <div >
                  <?php
                     if($update==true):
                  ?>

                  <?php else: ?>  
                  <input type="file" name="file" class=" form-control-lg" required="true" id="foodimage" >
                  <?php endif;?> 

                </div>
                <br><br>

               




                <div class="input-group my-3">

                   <input type="number"  name="price" class="form-control form-control-lg" value="<?php echo $foodprice; ?>" id="foodprice" class="form-control" placeholder="Enter Price" required="true">

                </div>
                <br><br>

                 <?php
        if($update==true):
        ?>
            <button type="submit"  name="update"class="btn btn-block btn-lg text-uppercase contact-btn"><i class="far fa-hand-point-right mr-2"></i>update</button>

              <?php else: ?>  
            <button type="submit" name="submitImage" class="btn btn-block btn-lg text-uppercase contact-btn"><i class="far fa-hand-point-right mr-2"></i>Upload</button>
             <?php endif;?>  




              </form>

            </div>


          </div>
        </div>



    </div>
        
    
    </section>


    <section>
    		<!--View Menu-->
<?php $results = mysqli_query($conn, "SELECT * FROM products"); ?>
<table>
	<thead>
		<tr>
			<th>Food Image</th>
			<th>Product Name</th>
			<th>Code</th>
			<th>Product Price</th>
			<th>Product Image</th>
			<th colspan="2">Action</th>
			
			
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)):  ?>
		<tr>
			<td><img src="<?php echo $row["productimage"] ?>" width="130" height="130" alt=""></td>
			<td><?php echo $row['productname']; ?></td>
			<td><?php echo $row['code']; ?></td>
			<td><?php echo $row['productprice']; ?></td>
			
			
			<td>
				<a href="editmenu.php?edit=<?php echo $row['productid']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="editmenu.php?delete=<?php echo $row['productid']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php endwhile; ?>
</table>





    </section>



<hr>


	


</body>
</html>