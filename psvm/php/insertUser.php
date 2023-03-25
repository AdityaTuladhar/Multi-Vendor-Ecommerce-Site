<?php 
include("../config.php");
$name=$_POST['Name'];
$password=$_POST['password'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$image="../uploads/".$_FILES['image']['name'];
$query="insert into users_tbl (name,password,email,phone,image) values ('$name','$password','$email','$phone','$image')";
if($name=''||$password=''||$email=''||$phone='')
{
	echo "<script> alert('Empty Fields');</script>";
	header("location:../dashboard/pages/createUser.php");
}
else
{
	
	$result=mysqli_query($con,$query);
	move_uploaded_file($_FILES['image']['tmp_name'],$image);
	if($result)
	{	
		header("location:../dashboard/pages/login.php");
	}
	else
	{
		die(mysqli_error($con));
	}
}
?>