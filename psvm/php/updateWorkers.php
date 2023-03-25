<?php 
include('../config.php');
$id=$_POST['id'];
$worker_name=$_POST['name'];
$services=$_POST['services'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$photo='../uploads/'.$_FILES['image']['name'];

if($_FILES['image']['name']!="")
{
	$query="update workers_tbl set
	w_name='$worker_name',
	w_address='$address',
	w_phone='$address',
	w_email='$email',
	w_image='$photo',
	sid='$services'
	where eid=$id
	";
	$result=mysqli_query($con,$query);
	move_uploaded_file($_FILES['image']['tmp_name'],$photo);
	header("Location:../dashboard/pages/workers.php");
}
else
{
	$query="update workers_tbl set
	w_name='$worker_name',
	w_address='$address',
	w_phone='$address',
	w_email='$email',
	sid='$services'
	where eid=$id
	";
	$result=mysqli_query($con,$query);
}


mysqli($con);
?>