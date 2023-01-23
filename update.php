<?php include("connection.php");
error_reporting(0);

$id = $_GET['id'];

$query = "SELECT * FROM order1 where orid= '$id'";
$data = mysqli_query($conn, $query);
 

$result = mysqli_fetch_assoc($data);


?>




<!DOCTYPE html>
<html>
  <head> 
    <link rel="stylesheet" href="order.css">
 
  <style>
   body {
      
      background-size: cover;
    }
    </style>
	  
	 
  </head>
<body background-image>

<div class="wrapper">

    <div class="registration_form">
   <!-- Title -->
     <div class="title">
       Update order details
     </div>
   
   <!-- Form --> 
		<form action="#"  method="post">
     <div class="form_wrap">
      <div class="input_grp">
   
   <!--  name input Place -->
        <div class="input_wrap">
         <label for="name"> Name :</label>
         <input type="text" id="name" name="name" value="<?php echo $result['fname']; ?>" required placeholder="Enter name">
			<span id="custname"></span>
        </div>
   
   <!-- mobile number input place -->
       <div class="input_wrap">
         <label for="phonenum">Mobile number:</label>
         <input tel="text" id="phonenum" name="phonenum" value="<?php echo $result['phone']; ?>"  maxlength="13/" required>
		   <span id="mobilenum" ></span>
       </div>
		 </div>
		 
		
		 
   
   <!-- productname input Place -->
  
    <div class="input_wrap">
     <label for="email">Email :</label>
     <input type="text" id="email" name="email" value="<?php echo $result['email'];?>" required placeholder="enter email address">
		<span id="emaile" ></span>
    </div>
   
  
<div class="input_wrap">
     <label for="product">Product name :</label>
     <input type="text" id="product" name="product" value="<?php echo $result['product'];?>" required placeholder="enter product name">
		<span id="productname" ></span>
    </div>
	
 <div class="input_wrap">
     <label for="quantity">Quantity:</label>
     <input type="text" id="quantity" name="quantity"  value="<?php echo $result['quantity']; ?>" required placeholder="enter quantity">
		<span id="quantitynum" ></span>
    </div>
  
   
   <!-- Submit button -->
		  
    <div class="input_wrap">
      <input type="submit" id="create" value="Update" class="submit_btn" name="Updated">
    </div>
   
   </div>

   </form>
		
   </div>
   </div>
	
   

 
</body>
</html>


<?php 

if($_POST['Updated'])
{
     $name      = $_POST['name'];
     $mob       = $_POST['phonenum'];
	 $email     = $_POST['email'];
	 $product   = $_POST['product'];
	 $quantity  = $_POST['quantity'];
	
	$query = "UPDATE order1 set fname='$name',phone='$mob',email='$email',product='$product',quantity='$quantity' WHERE orid='$id'";
	
    $data = mysqli_query($conn,$query);
	
	
	if($data)
	{
		 echo "<script>alert('Record updated')</script>";
		?>

     <meta http-equiv = "refresh" content = "2; url = http://localhost/Dairy_Management_project/display.php" />
  
<?php
		
		}
		
	else
	{
		 echo "Failed to update";
	}
	}
?>