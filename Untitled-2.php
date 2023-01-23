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
         <input type="text" id="name" name="name" required placeholder="Enter name">
			<span id="custname"></span>
        </div>
   
   <!-- mobile number input place -->
       <div class="input_wrap">
         <label for="phonenum">Mobile number:</label>
         <input tel="text" id="phonenum" name="phonenum" value="+91" maxlength="13/" required>
		   <span id="mobilenum" ></span>
       </div>
		 </div>
		 
		
		 
   
   <!-- productname input Place -->
  
    <div class="input_wrap">
     <label for="email">Email :</label>
     <input type="text" id="email" name="email" required placeholder="enter email address">
		<span id="emaile" ></span>
    </div>
   
  
<div class="input_wrap">
     <label for="product">Product name :</label>
     <input type="text" id="product" name="product" required placeholder="enter product name">
		<span id="productname" ></span>
    </div>
	
 <div class="input_wrap">
     <label for="quantity">Quantity:</label>
     <input type="text" id="quantity" name="quantity"   required placeholder="enter quantity">
		<span id="quantitynum" ></span>
    </div>
  
   
   <!-- Submit button -->
		  
    <div class="input_wrap">
      <input type="submit" id="create" value="Update" class="submit_btn" name="Order">
    </div>
   
   </div>

   </form>
		
   </div>
   </div>
	
   

 
</body>
</html>


<?php 
include("connection.php");
if($_POST['Order'])
{
     $name      = $_POST['name'];
     $mob       = $_POST['phonenum'];
	 $email     = $_POST['email'];
	 $product   = $_POST['product'];
	 $quantity  = $_POST['quantity'];
	
	$query = "INSERT INTO order1 (fname,phone,email,product,quantity) values('$name', '$mob','$email ','$product','$quantity')";
    $data = mysqli_query($conn,$query);
	
	
	if($data)
	{
		 echo "data inserted into Database";
		}
		
	else
	{
		 echo "Failed";
	}
	}
?>


<?php
echo $_GET['id'];
echo $_GET['fn'];
echo $_GET['pn'];
echo $_GET['em'];
echo $_GET['pr'];
echo $_GET['qn'];

?>











