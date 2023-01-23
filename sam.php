<html>
<head>
	<title>Display</title>
	<style>
	body
		{
			background-image:url("blackmilk.jpg");
			background-size:contain;
		}
		table
		{
			background-color: beige;
		}
	</style>
	</head>




<?php
include("connection.php");
$query = "SELECT * FROM order1";
$data = mysqli_query($conn, $query);
 
$total = mysqli_num_rows($data);



//echo $total;

if($total !=0)
{
	?>


<h2 align="center"><mark>Displaying All records</mark></h2>
<center><table border="1" cellspacing="5" width="100%" >
	<tr>
		<th width="5%">ID</th>
     <th width="15%">Name</th>
	<th width="15%">Mobile number</th>
		<th width="15%">Email</th>
	<th width="18%">Product name</th>
	<th width="10"%">Quantity</th>
		<th width="17%">Operations</th>
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
			    
			<td><a href='update.php?id=$result[orid]'>Update</a></td>
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