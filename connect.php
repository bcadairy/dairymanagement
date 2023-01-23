<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABaSE='dairy_management';


$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABaSE);
 
if(!$con){
	die(mysqli_error($con));
}
?>
