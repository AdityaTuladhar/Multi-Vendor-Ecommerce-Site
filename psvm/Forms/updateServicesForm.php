<?php
session_start();	
if(empty($_SESSION['username']))
{
	header("location:login.php");
}
include('../config.php');
$query="select * from services_tbl";
$result=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="icon" href="../dashboard/images/sm.png" type="image/png">
	<link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../dashboard/css/style.css">
    <style type="text/css">
    	.main-content label
    	{
    		font-size: 30px;
    		color: #009688;
    		font-weight: bold;
    	}
    	.main-content input[type="text"]
    	{
    		border: 0.1px solid black;
    		margin-top: 20px;
    		width: 1000px;
    		height: 50px;
    		font-size: 30px;
    		font-family: "Helvetica";
    		padding-left: 8px;
    	}
    	.main-content input[type="text"]:focus
    	{
    		outline:none;
    	}
    	.main-content input[type="submit"]
    	{
    		border: none;
    		border-radius: 2px;
    		padding: 10px 20px;
    		margin-top: 20px;
    		color: white;
    		font-size: 20px;
    		background-color: #009688;
    	}
    	.main-content input[type="submit"]:hover
    	{
    		background-color: #319d98;
    		cursor: pointer;
    	}
    </style>
</head>
<body>
	<!-- Container -->
	<div class="container">
		<!-- Navbar -->
		<Nav id="header">
	        <div class="container flex-row navbar">
	            <div  id="navigation" class="nav-section flex-row">
	                <div class="nav active"><a href="../index.php">HOME</a></div>
	               
	                <div class="nav"><a href="pages/login.php">LOG OUT</a></div>
	            </div>
	        </div>
    	</Nav>
		<!-- navbar ends -->
		<!-- ----------------------------- -->
		<!-- Sidebar -->
		<div class="sidebar">
			<div class="title_bar">
				<img src="../dashboard/images/sm.png" class="dashboard-img-logo">
				<a href="../index.php"  class="main-heading">PS Management</a>
				<hr>
			</div>
			<ul>
				<li>
					<a href="../dashboard/index.php" class="nav-link pad">Dashboard</a>
				</li>
				<li>
					<a href="../dashboard/pages/services.php" class="nav-link active-sidebar">Services</a>
				</li>
				<li>
					<a href="../dashboard/pages/workers.php" class="nav-link">Workers</a>
				</li>
				<li>
					<a href="../dashboard/pages/about_us.php" class="nav-link">About Us</a>
				</li>
				<li>
					<a href="../dashboard/pages/contact.php" class="nav-link">Contact Us</a>
				</li>
			</ul>
		</div>
		<!-- Sidebar Ends -->
		<!-- ----------------------------------- -->
		<!-- Main Container -->
		<div class="main-content">
			<form action="../php/updateServices.php" method="post">
				<label>Enter the Service Name</label> <br>
				<input type="hidden" name="id" value="<?php echo $data['id'];?>">
				<input type="text" name="services_name" placeholder="Service Name" value="<?php echo $data['s_name'];?>"> <br>
				<input type="submit" value="Update">
			</form>			
		</div>
		<!-- Main Content End -->
		<!-- ---------------------------------------- -->
		<!-- Lower Footer -->
		<div class="lower-footer">
                <div class=" footer-details mini-container  flex-row"  >
                    <div class="left-footer"> &copy; Copyright Yashu &trade;2020. All rights Reserved. </div>
                <div class="right-footer"> Developed by : Yashu Sthapit</div></div>
        </div>
        <!-- Lower Footer Ends -->
	</div>
	<!-- Container Ends -->
	<script src="../js/custom.js"></script>
</body>
</html>