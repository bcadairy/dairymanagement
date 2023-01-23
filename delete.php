<?php
include("connection.php");

$id = $_GET['id'];

$query = "DELETE FROM order1 where orid = '$id'";

$data = mysqli_query($conn,$query);
if($data)
{
	echo "record deleted";
}
else
{
	echo "failed to delete";
}



?>
