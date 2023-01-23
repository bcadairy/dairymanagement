<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
</body>
</html>

<?php
$success=0;
$user=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
	include 'connect.php';
	$email=$_POST['email'];
	$password=$_POST['password'];
	$sql="Select *from `login` where email='$email'  and password='$password' ";
	$result=mysqli_query($con,$sql);
	if($result){
		$num=mysqli_num_rows($result);
		if($num>0){
			$user=1;
			echo "connected";
			$_SESSION["email"] = $email;
		}
		else{
			$success=1;
		echo "not connected";
			}
			}
		
	}

?>

<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="login.css">
	<style>
	 body {
      
      background-size: cover;
    }
	</style>
</head>
	<body background-image>
		<?php
		if($user){
			header('location:service2.html');
		}
		?>
		<?php
		if($success){
			echo '
			<strong><h1>  <script>alert("email and password does not match")</script> </h1></strong>
			
			';
		}
		?>
<div class="wrapper">

    <div class="registration_form">
   <!-- Title --> 
     <div class="title">
       Login 
     </div>
   
   <!-- Form -->
		<form  name="f1" action="login.php" onSubmit="return validation()" method="post">
     <div class="form_wrap">
		 
      <div class="input_grp">
   
     <div class="input_wrap">
       <p>
         <label for="email"> Email: <br>
         </label>
         <input type="text" id="email" name="email"  placeholder="email">
       </p>
     
     </div>
		 </div>
		</div>
		    
		    
	  <div class="form_wrap">
      <div class="input_grp">
	    <div  class="input_wrap">
	      <label for="password">password: <br></label>
    <input type="password" id="password" name="password"  placeholder="Enter password ">
  </div>
		  </div>
		</div>
		<div class="form_wrap">
      <div class="input_grp">
	   
		   <div class="input_wrap">
      <input type="submit" value="login" class="submit_btn" href="product.html" >
			    <a href="product.html"/a>
	
    </div>
			</div>
		</div>
		
		
   
		<div>
			<br>
            <a style="font-size: 15px;" class="submit_btn" href="register.html">not registered..? Click here..</a>
		</div>
		
		</form>
		</div>
	</div>
		<script>  
            function validation()  
            {  
                var id=document.f1.email.value;  
                var ps=document.f1.password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("Email and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("Enter your Email");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
			
        </script>  	
</body>
		</html>
	