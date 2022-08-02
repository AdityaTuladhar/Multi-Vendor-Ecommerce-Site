<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";
$con = new mysqli($servername, $username, $password, $dbname);

$username=$_POST["name"];
$number=$_POST["number"];
$email=$_POST["email"];
$password=$_POST["password"];

$query = "INSERT INTO user_info(name,email,phone,password) VALUES ('$username','$email','$number','$password')";
mysqli_query($con ,$query);
header("Location: login.php");
?>