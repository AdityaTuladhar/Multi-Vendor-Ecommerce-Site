<?php 
include('../config.php');
$id=$_POST['id'];
$service_name=$_POST['services_name'];

$query="UPDATE services_tbl SET s_name='$service_name' WHERE id=$id";
$result=mysqli_query($con,$query);

if($result)
{
	header("Location:../dashboard/pages/services.php");
}
else
{
	echo"Error Updating Data --".mysqli_error($con);
}


 ?>