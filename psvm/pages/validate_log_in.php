<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";
$con = new mysqli($servername, $username, $password, $dbname);

$email=$_POST["email"];
$password=$_POST["password"];

$query = "SELECT * FROM user_info WHERE email='$email' and password='$password'";
$result = mysqli_query($con ,$query);
if (mysqli_num_rows($result)==0){
    header("Location: login.php");
}
else if(mysqli_num_rows($result)==1){
    if($email=='admin'&& $password=='admin123'){
        session_start();
        $_SESSION["admin_id"] = mysqli_fetch_assoc($result)['id'];
        header("Location:../dashboard/admin_trans_list.php");
    }
    else{
        session_start();
        $_SESSION["user_id"] = mysqli_fetch_assoc($result)['id'];
        header("Location: market.php");
    }

}
?>