<?php
$id=$_GET['id'];
$query="select w_name,w_address,w_phone,w_email,s_name,w_image from workers_tbl inner join services_tbl on services_tbl.id=workers_tbl.sid where eid=$id";
include('../config.php');

$result=mysqli_query($con,$query) or die(mysqli_error($con));
$data=mysqli_fetch_assoc($result);
$image=$data['w_image'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="icon" href="../dashboard/images/sm.png" type="image/png">
	<script src="https://kit.fontawesome.com/e08bae14af.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../css/all.min.css">
	<link rel="stylesheet" href="../dashboard/css/style.css">
	<style>
		.main-content table tr td
		{
			width: 50%;
			height: 50px;
			font-size: 25px;
		}
		.main-content table tr .heading_t
		{
			font-weight: bold;
			text-align: right;
		}
		.main-content table tr .heading_t:after
		{
			content: ":"
		}
		.main-content table tr .viewTableImage
		{
			display: block;
			margin-left: auto;
			margin-right: auto;
			width: 100px;
			height: 100px;
			border-radius: 50px;
		}
		.main-content table tr td .backButton
		{
			border:none;
			font-size:20px;
			padding: 10px 15px;
			border-radius: 5px;
			background-color: #009688;
			color: white;
			font-weight:bold;
		}
		.main-content table tr td .backButton:hover
		{
			cursor: pointer;
			background-color: #39847d;
		}
	</style>
</head>
<body>
	<!-- Custom Javascript Dialog Box -->
	<div id="dialogoverlay"></div>
	<div id="dialogbox">
		<div>
			<div id="dialogboxbody"></div>
			<div id="dialogboxfoot"><button onclick="Alert.ok();">OK</button></div>
		</div>
	</div>

	<!-- Custom Javascript Dialog Box Ends -->
	<!-- Container -->
	<div class="container">
		<!-- Navbar -->
		<Nav id="header">
			<div class="container flex-row navbar">
				<div  id="navigation" class="nav-section flex-row">
					<div class="nav active"><a href="../../index.php">HOME</a></div>
					<button onclick="Alert.render('Data Added Successfully');"> Press</button>
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
					<a href="../dashboard/pages/services.php" class="nav-link">Services</a>
				</li>
				<li>
					<a href="../dashboard/pages/workers.php" class="nav-link active-sidebar" >Workers</a>
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
			<table cellpadding="0" cellspacing="0">
				<tr>
					<th colspan="2" style="text-align: center; font-size: 25px;">Information</th>
				</tr>
				<tr>
					<td colspan="2">
						<img src="<?php echo $image;?> " class="viewTableImage">
					</td>
				</tr>
				
				<tr>
					<td class="heading_t">Name</td>
					<td> <?php echo $data['w_name'] ?></td>
				</tr>
				<tr>
					<td class="heading_t">Address</td>
					<td> <?php echo $data['w_address'] ?></td>
				</tr>
				<tr>
					<td class="heading_t">Phone</td>
					<td> <?php echo $data['w_phone'] ?></td>
				</tr>
				<tr>
					<td class="heading_t">Email</td>
					<td> <?php echo $data['w_email'] ?></td>
				</tr>
				<tr>
					<td class="heading_t">Service</td>
					<td> <?php echo $data['s_name'] ?></td>
				</tr>
				<tr>
					<td colspan="2" style="height: 50px; text-align: center;">
						<a href="../dashboard/pages/workers.php">
							<button class="backButton">Back</button>	
						</a>	
					</td>
				</tr>

				
			</table>
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