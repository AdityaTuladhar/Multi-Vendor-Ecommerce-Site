<?php
include('../config.php');
$query="select *from services_tbl";
$result=mysqli_query($con,$query);

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
			font-size: 20px;
			color: #009688;
			font-weight: bold;
		}
		.main-content input[type="text"]
		{
			border: 0.1px solid black;
			margin-top: 10px;
			margin-bottom: 20px;
			width: 1000px;
			height: 40px;
			font-size: 20px;
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
			margin-right: 0px;
		}
		.main-content input[type="submit"]:hover
		{
			background-color: #319d98;
			cursor: pointer;
		}
		.main-content select
		{
			width: 1012px;
			height: 40px;
			border: 0.1px solid black;
			font-size: 15px;
			font-family: "Helvetica";
			padding-left: 8px;
		}
		.main-content select:focus
		{
			outline: none;
		}
		.inputfile{
			padding: 10px;
			background-color: white;
			border: 0.1px solid black; 
			display: table;
			color: #fff;
		}
		.inputfile:hover
		{
			background-color: #009688;
			color: white;
			cursor: pointer;
		}
		input[type="file"] {
			display: none;
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
					<a href="../dashboard/pages/services.php" class="nav-link ">Services</a>
				</li>
				<li>
					<a href="../dashboard/pages/workers.php" class="nav-link active-sidebar">Workers</a>
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
			<form action="../php/insertWorkers.php" method="post" enctype="multipart/form-data">
				<label>Worker's Name</label> <br>
				<input type="text" name="worker_name" placeholder="Eg: John Adam"> <br>
				<label>Services</label> <br>
				<select name="services">
					<option disabled selected> Please Choose Any One</option>
					<?php
					while($row=mysqli_fetch_assoc($result))
					{
							?>
							<option value="<?php echo $row['id']; ?>"><?php echo $row['s_name']; ?></option>	
							<?php			
					}
					?>
				</select> <br>
				<label>Address</label> <br>
				<input type="text" name="address" placeholder="Eg: Baneswor"> <br>
				<label>Phone Number</label> <br>
				<input type="text" name="phoneNumber" placeholder="Eg: 9841889184" > <br>
				<label>Email</label> <br>
				<input type="text" name="email" placeholder="Eg: john@gmail.com"> <br>
				<label class="inputfile"> Upload File
					<input type="file" size="60" name="image">
				</label> 
				<input type="submit" value="Submit" onclick="check();">
			</form>
			<!-- <button onclick="alertCheck();">Check</button> -->
			
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
		<script type="text/javascript">
			function check()
			{
				var x=<?php json_encode($yashu);?>;
				alert(x);
			}
		</script>
	</body>
	</html>