<!DOCTYPE html>
<html>
  <head> 
    <link rel="stylesheet" href="supply.css">
 
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
       Order now
     </div>
   
   <!-- Form --> 
		<form action="#"  method="post">
     <div class="form_wrap">
      <div class="input_grp">
   
   <!--  name input Place -->
        <div class="input_wrap">
         <label for="name"> Name :</label>
         <input type="text" id="sname" name="sname" required placeholder="Enter name">
			<span id="custname"></span>
        </div>
   
   <!-- mobile number input place -->
       <div class="input_wrap">
         <label for="add">Address</label>
         <input tel="text" id="address" name="address"  required placeholder="enter address">
		   <span id="sadd" ></span>
       </div>
		 </div>
		 
		
		 
   
		 
      
   <!-- productname input Place -->
  
    <div class="input_wrap">
     <label for="mob">Mobile Number :</label>
     <input type="text" id="mbnum" name="mobnum" value="+91"   maxlength="13/" required>
		<span id="mbnum" ></span>
    </div>
   
  
<div class="input_wrap">
     <label for="email">Email</label>
     <input type="text" id="email" name="email" required placeholder="enter email">
		<span id="semail" ></span>
    </div>
	
 
   
   <!-- Submit button -->
		  
    <div class="input_wrap">
      <input type="submit" id="create" value="Syppl" class="submit_btn" name="Supply">
    </div>
   
   </div>

   </form>
		
   </div>
   </div>
	
   

 
</body>
</html>


<?php 
include("connection.php");
if($_POST['Supply'])
{
     $fname      = $_POST['sname'];
     $add      = $_POST['address'];
	 $mobl    = $_POST['mobnum'];
	 $email   = $_POST['email'];

	
	$query = "INSERT INTO supplier (sname,address,mobnum,emailid) values('$fname', '$add','$mobl ','$email')";
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