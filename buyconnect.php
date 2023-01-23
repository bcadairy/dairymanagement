<?php
   
	$name =$_POST['name'];
	
	$phonenumber = $_POST['phonenumber'];

    $product=$_POST['product'];

    $quantity=$_POST['quantity'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','dairy_management');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into order(name,phonenumber,product,quantity ) values(?,?,?,?)");
		$stmt->bind_param( "ssss", $name, $phonenumber,$product,$quantity);
		
		$execval = $stmt->execute();
		$execval = $stmt1->execute();
		echo $execval;
	 header('location:wlcm.html');
		$stmt->close();
		$stmt1->close();
		$conn->close();
	}

		
	
?>
