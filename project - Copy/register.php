<?php
	$username =$_POST['username'];
	
	$email = $_POST['email'];
	$Phonenumber = $_POST['Phonenumber'];
	$password = $_POST['password'];
	$Confirmpassword = $_POST['Confirmpassword'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','arecanut');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration( username, email, Phonenumber, password, Confirmpassword) values(?, ?, ?, ?, ?)");
		$stmt->bind_param( "ssiss", $username, $email,$Phonenumber, $password,$Confirmpassword);
		
		$stmt1 = $conn->prepare("insert into login( email,password) values(?, ?)");
		$stmt1->bind_param( "ss", $email,$password);
		
		$execval = $stmt->execute();
		$execval = $stmt1->execute();
		echo $execval;
	 header('location:login.php');
		$stmt->close();
		$stmt1->close();
		$conn->close();
	}
?>