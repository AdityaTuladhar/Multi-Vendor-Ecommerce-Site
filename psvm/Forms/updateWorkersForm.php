<?php
include('../config.php');
$id=$_GET['id'];

//Inner Joined Services and Workers Table
$query="select eid,id, w_name,w_address,w_phone,w_email,s_name,w_image from workers_tbl inner join services_tbl on services_tbl.id=workers_tbl.sid where eid=$id";
$result=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($result);
$image=$data['w_image'];

//Query to select the services table
$q="select * from services_tbl";
$service_check=mysqli_query($con,$q);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="icon" href="../dashboard/images/sm.png" type="image/png">
	<link rel="stylesheet" href="../css/all.min.css">
	<link rel="stylesheet" href="../dashboard/css/style.css">
	<style type="text/css">
		table tr td
		{
			background-color: white;
			/*height: 50px;*/
		}
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
			width: 500px;
			height: 40px;
			font-size: 20px;
			font-family: "Helvetica";
			padding-left: 8px;
		}
		.main-content input[type="text"]:focus
		{
			outline:none;
		}
		.main-content input[type="submit"],.submit
		{
			border: none;
			border-radius: 2px;
			margin-bottom: 20px;
			padding: 10px 20px;
			margin-top: 20px;
			color: white;
			font-size: 20px;
			background-color: #009688;
			margin-right: 15px;
		}
		.main-content input[type="submit"]:hover,.submit:hover
		{
			background-color: #319d98;
			cursor: pointer;
		}
		.main-content select
		{
			width: 512px;
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
		.viewTableImage
		{
			display: block;
			height: 200px;
			width: 200px;
			margin-left: 95px;
			border-radius: 10px
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
			<form action="../php/updateWorkers.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $data['eid'];?>">
				<table cellspacing="0" cellpadding="0">
					<tr>
						<td rowspan="6">
							<img src="<?php echo $image;?> " class="viewTableImage">
						</td>
						<td colspan="2">
							<label>Name</label> <br>
							<input type="text" name="name" value="<?php echo $data['w_name']?>">
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<label>Service</label> <br>
							<select name="services">
								<option disabled selected> Please Choose Any One</option>
								<?php 
									while($row=mysqli_fetch_assoc($service_check))
									{
										if($row['s_name']==$data['s_name'])
										{
											echo "<option value='".$row['id']."'selected>".$row['s_name']."</option>";
										}
										if($row['s_name']!=$data['s_name'])	
										{
											echo "<option value='".$row['id']."'>".$row['s_name']."</option>";
										}
									}
								 ?>
							</select>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<label>Address</label> <br>
							<input type="text" name="address" value="<?php echo $data['w_address']?>">
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<label>Phone</label> <br>
							<input type="text" name="phone" value="<?php echo $data['w_phone']?>">
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<label>Email</label> <br>
							<input type="text" name="email" value="<?php echo $data['w_email']?>">
						</td>
					</tr>
					<tr>
						<td>
							<label class="inputfile"> Upload File
								<input type="file" size="60" name="image"> 
							</label>
						</td>
						<td>
							<input type="submit" class="submit" value="Update"> 
						</td>
					</tr>
				</table>
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
	</body>
	</html>