<?php
include("connection.php");
$query = "SELECT * FROM order1";
$data = mysqli_query($conn, $query);
 
$total = mysqli_num_rows($data);



//echo $total;

if($total !=0)
{
	$a = 1;
	while($result = mysqli_fetch_assoc($data))
	{
		echo $result['fname']."   ".$result['phone']."  ".$result['product']."  ".$result['quantity'];
	}
}
else
{
echo "No records found ";	
}
?>