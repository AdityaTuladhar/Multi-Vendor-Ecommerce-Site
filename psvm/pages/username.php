<?php

    // session_start();
    if(isset($_SESSION["user_id"])){
        $id = $_SESSION['user_id'];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ecommerce";
        $con = new mysqli($servername, $username, $password, $dbname);
        $query = "SELECT name FROM user_info WHERE id=$id";
        $result = mysqli_query($con ,$query);
        echo mysqli_fetch_assoc($result)["name"] ;
    }
    else{
    }
?>