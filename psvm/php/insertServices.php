<?php 
include('../config.php');
$name=$_POST['services_name'];
if($name=='')
{
	echo"<script>";
	echo "alert('Error Inserting Data');";
	echo"</script>";
	header("Location:../dashboard/pages/services.php");
}
else
{
	$query="insert into services_tbl (s_name)  values ('$name')";
	$result=mysqli_query($con,$query);
	if ($result) {
		echo"<script>";
		echo "alert('Data Inserted Successfull');";
		echo"</script>";
		header("Location:../dashboard/pages/services.php");
	}
	else
	{
		echo"Error Inserting Data"."-->".mysqli_error($con);
	} 
}

mysqli($con);
?>