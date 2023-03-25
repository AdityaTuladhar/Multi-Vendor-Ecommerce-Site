<?php 
	include('../config.php');
	$id=$_GET['id'];
	// $counter=$_GET['c'];
	// echo $counter;

	$query="delete from workers_tbl where eid=$id";
	$result=mysqli_query($con,$query);
	$row=mysqli_fetch_assoc($result);

	if($result)
	{
		echo "<script> alert('Data Deleted Successfull'); </script>";
		header("Location:../dashboard/pages/workers.php");
		unlink($row['image']['name']);
	}
	else
	{
		echo"Error Deleting Data"."-- ".mysqli_error($con);
	}
	mysqli($con);
 ?>