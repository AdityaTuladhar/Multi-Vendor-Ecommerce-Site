<?php 
session_start();	
$r=$_SESSION['username'];
if(empty($_SESSION['username']))
{
	header("location:login.php");
}
include("../../config.php");
$q="SELECT * FROM `users_tbl` WHERE name='$r'";
$result_output=mysqli_query($con,$q) or die(mysqli_error($con));
$data=mysqli_fetch_assoc($result_output);
$image_admin=$data['image'];	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="../css/all.min.css">
	<script src="https://kit.fontawesome.com/e08bae14af.js" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<!-- Container -->
	<div class="container">
		<!-- Navbar -->
		<Nav id="header">
			<div class="container flex-row navbar">
				<div  id="navigation" class="nav-section flex-row">
					<div class="nav active"><a href="../../index.php">HOME</a></div>
					<div class="nav">
						<img src="../<?php echo $image_admin; ?>" alt="<?php echo $data['name'];?>" style="width: 40px; height:40px; border-radius: 50%; color: white; font-family:'Helvatica';object-fit: cover; text-transform: uppercase;">
						<p style="color:white; text-transform: capitalize; float: right; margin-top: 13px; margin-left: 10px;"><?php echo $data['name']; ?></p>
					</div>
				</div>
			</div>
		</Nav>
		<!-- navbar ends -->
		<!-- ----------------------------- -->
		<!-- Sidebar -->
		<div class="sidebar">
			<div class="title_bar">
				<img src="../images/sm.png" class="dashboard-img-logo">
				<a href="../index.php"  class="main-heading">PS Management</a>
				<hr>
			</div>
			<ul>
				<li>
					<a href="../index.php" class="nav-link pad">Dashboard</a>
				</li>
				<li>
					<a href="services.php" class="nav-link">Services</a>
				</li>
				<li>
					<a href="workers.php" class="nav-link">Workers</a>
				</li>
				<li>
					<a href="about_us.php" class="nav-link active-sidebar">About Us</a>
				</li>
				<li>
					<a href="contact.php" class="nav-link">Contact Us</a>
				</li>
				<li class="logout-button">
					<a href="logout.php" class="nav-link"> <i class="fa fa-lock fa-lg"></i> Log Out</a>
				</li>
			</ul>
		</div>
		<!-- Sidebar Ends -->
		<!-- ----------------------------------- -->
		<!-- Main Container -->
		<div class="main-content">
			<table cellpadding="0" cellspacing="0">
				<tr>
					<td colspan="3" class="heading_title">About Us</td>
					<td class="button-btn">
						<a href="#">
							<button class="add">ADD</button>	
						</a>
					</td>
				</tr>
				<tr>
					<th>Name</th>
					<th>Company</th>
					<th>Phone</th>
					<th>Email</th>
				</tr>
				<tr>
					<td class="name">Yashu Sthapit</td>
					<td class="company">Tesla</td>
					<td class="phone">9808768922</td>
					<td class="email">yashusthapit@gmail.com</td>
				</tr>
				<tr>
					<td class="name">Ajashala Bajracharya</td>
					<td class="company">Microsoft Cooperation</td>
					<td class="phone">9841221675</td>
					<td class="email">ajashala413@gmail.com</td>
				</tr>
				<tr>
					<td class="name">Sarthak Gurung</td>
					<td class="company">Apple Inc.</td>
					<td class="phone">0800 799777</td>
					<td class="email">sarthakgurung@gmail.com</td>
				</tr>
				<tr>
					<td class="name">Rashik Tuladhar</td>
					<td class="company">IBM Company</td>
					<td class="phone">0845 46 47</td>
					<td class="email">rashik587@gmail.com</td>
				</tr>
				<tr>
					<td class="name">Aditya Tuladhar</td>
					<td class="company">Non Foundation</td>
					<td class="phone">0815 474 7924</td>
					<td class="email">aditya123@gmail.com</td>
				</tr>
				<tr>
					<td class="name">Siza Bajracharya</td>
					<td class="company">Id Mollis Limited</td>
					<td class="phone">0845 46 46</td>
					<td class="email">bajrasiza@gmail.com</td>
				</tr>
				<tr>
					<td class="name">Subha Man Shrestha</td>
					<td class="company">Google</td>
					<td class="phone">(014328) 69655</td>
					<td class="email">mansubha@gmail.com</td>
				</tr>
				<tr>
					<td class="name">Lishu Maharjan</td>
					<td class="company">Deerwalk</td>
					<td class="phone">0845 46 47</td>
					<td class="email">maharjanlishu@gmail.com</td>
				</tr>
				<tr>
					<td class="name">Liza Maharjan</td>
					<td class="company">Amazon</td>
					<td class="phone">(0131) 400 5474</td>
					<td class="email">liza_98@gmail.com</td>
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
	</body>
	</html>