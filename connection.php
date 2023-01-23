<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABaSE='dairy_management';


$conn = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABaSE);
 
if($conn)
{
	//echo "Connection ok";
}
else{
	//echo "Connection failed";
	
}
?>