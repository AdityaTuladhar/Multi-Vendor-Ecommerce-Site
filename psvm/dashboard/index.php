<?php
session_start();
$r=$_SESSION['username'];	
if(empty($_SESSION['username']))
{
	header("location:pages/login.php");
}
include('../config.php');
$query="select w_name,w_address,w_phone,w_email,s_name from workers_tbl inner join services_tbl on services_tbl.id=workers_tbl.sid";

$result=mysqli_query($con,$query);	

$q="SELECT * FROM `users_tbl` WHERE name='$r'";
$result_output=mysqli_query($con,$q) or die(mysqli_error($con));
$data=mysqli_fetch_assoc($result_output);
$image_admin=$data['image'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="icon" href="../dashboard/images/sm.png" type="image/png">
	<script src="https://kit.fontawesome.com/e08bae14af.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!-- Container -->
	<div class="container">
		<!-- Navbar -->
		<Nav id="header">
			<div class="container flex-row navbar">
				<div  id="navigation" class="nav-section flex-row">
					<div class="nav active"><a href="../index.php">HOME</a></div>
					<div class="nav">
						<img src="<?php echo $image_admin; ?>" alt="<?php echo $data['name'];?>" style="width: 40px; height:40px; border-radius: 50%; color: white; font-family:'Helvatica'; object-fit: cover;text-transform: uppercase;"> 
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
				<img src="images/sm.png" class="dashboard-img-logo">
				<a href="" class="main-heading">PS Management</a>
				<hr>
			</div>
			<ul>
				<li>
					<a href="index_one.html" class="nav-link pad active-sidebar">Dashboard</a>
				</li>
				<li>
					<a href="pages/services.php" class="nav-link">Services</a>
				</li>
				<li>
					<a href="pages/workers.php" class="nav-link">Workers</a>
				</li>
				<li>
					<a href="pages/about_us.php" class="nav-link">About Us</a>
				</li>
				<li>
					<a href="pages/contact.php" class="nav-link">Contact Us</a>
				</li>
				<li class="logout-button">
					<a href="pages/logout.php" class="nav-link"> <i class="fa fa-lock fa-lg"></i> Log Out</a>
				</li>
			</ul>
		</div>
		<!-- Sidebar Ends -->
		<!-- ----------------------------------- -->
		<!-- Main Container -->
		<div class="main-content">
			<table cellpadding="0" cellspacing="0">
				<tr>
					<td colspan="4" class="heading_title">Dashboard</td>
					<td class="button-btn">
						<a href="../../Forms/insertFormServices.php">
							<button class="add">PDF</button>	
						</a>
					</td>
					<td class="button-btn">
						<a href="../../Forms/insertFormServices.php">
							<button class="add">XLS</button>	
						</a>
					</td>	
				</tr>
				<tr>
					<th>Sn</th>
					<th>Name</th>
					<th>Adress</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Services</th>
				</tr>
				<?php 
				$c=1;
				while($row=mysqli_fetch_assoc($result))
				{
					echo"<tr>";
					echo "<td>". $c ."</td>";
					foreach($row as $key =>$value)
					{
						echo"<td>".$value."</td>";
					}
					echo"</tr>";
					$c++;
				}
				?>
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