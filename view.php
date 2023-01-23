<?php
// Start the session
session_start();


?>
<!DOCTYPE html>

<html>
<head>
	<title>Display</title>
	<style>
	body
		{
			background-image:url("background10.jpg");
			background-size:contain;
		}
		table
		{
			background-color: beige;
		}
		.update,.delete
		{
			background-color: antiquewhite;
			border:0;
			outline: none;
			border-radius: 5px;
			height:22px;
			width:80px;
			font-weight: bold;
			cursor: pointer;
		}
		.delete
		{
			background-color:darksalmon;
		}
	</style>
	</head>




<?php
include("connection.php");
	error_reporting(0);
	
$query = "SELECT * FROM order1 Where email='".$_SESSION["email"]."'"; ;
$data = mysqli_query($conn, $query);
 
$total = mysqli_num_rows($data);



//echo $total;

if($total !=0)
{
	?>

<h2 align="center"><mark>View order details</mark></h2>

<center><table border="1" cellspacing="5" width="100%" >
	<tr>
		<th width="5%">ID</th>
     <th width="15%">Name</th>
	<th width="15%">Mobile number</th>
		<th width="15%">Email</th>
	<th width="18%">Product name</th>
	<th width="10"%">Quantity</th>
	
	</tr>
<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
		<td>".$result['orid']."</td>
		<td>".$result['fname']."</td>
		<td>".$result['phone']."</td>
		<td>".$result['email']."</td>
		<td>".$result['product']."</td>
		<td>".$result['quantity']."</td>
	       </tr>
		   "; 
	}
}
else
{
echo "No records found ";	
}
?>
</table>
</center>