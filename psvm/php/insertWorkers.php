<?php 
	include('../config.php');
	$worker_name=$_POST['worker_name'];
	$services=$_POST['services'];
	$address=$_POST['address'];
	$phone=$_POST['phoneNumber'];
	$email=$_POST['email'];
	$image='../uploads/'.$_FILES['image']['name'];

	$query="insert into workers_tbl
	(sid,w_name,w_address,w_phone,w_email,w_image) 
	values 
	('$services','$worker_name','$address','$phone','$email','$image')
	";
	if($worker_name==''||$services==''||$address==''||$phone==''||$email=='')
	{
		echo "<script> alert('Fields Can't be Empty'); </script>";
		header("Location:../dashboard/pages/workers.php");
	}
	else
	{
		$result=mysqli_query($con,$query);
		move_uploaded_file($_FILES['image']['tmp_name'],$image);
		if($result)
	    {
	    	
	        echo "<script> alert('Data Added Succesfully'); </script>";
	        header("Location:../dashboard/pages/workers.php");
	        
	    }
	    else{
	        die(mysqli_error($con));
	    }

	}
	mysqli($con);
 ?>