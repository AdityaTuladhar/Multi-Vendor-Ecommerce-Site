<?php 
include('../config.php');
$name=$_POST['contact_name'];
$email=$_POST['contact_email'];
$message=$_POST['contact_message'];
$query="insert into contacts_tbl(name,email,message) values ('$name','$email','$message')";
$result=mysqli_query($con,$query);
if($result)
{
	header("location:../pages/contactus.php");
}
?>
