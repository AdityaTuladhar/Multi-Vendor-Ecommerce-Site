<?php 
session_start();	
$r=$_SESSION['username'];	
if(empty($_SESSION['username']))
{
	header("location:login.php");
}
include("../../config.php");
$query="select name,email,message from contacts_tbl";
$result=mysqli_query($con,$query);

$q="SELECT * FROM `users_tbl` WHERE name='$r'";
$result_output=mysqli_query($con,$q) or die(mysqli_error($con));
$data=mysqli_fetch_assoc($result_output);
$image_admin=$data['image'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard/Contact</title>
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
						<img src="../<?php echo $image_admin; ?>" alt="<?php echo $data['name'];?>" style="width: 40px; height:40px; border-radius: 50%; color: white; font-family:'Helvatica';object-fit: cover;text-transform: uppercase;">
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
				<a href="../index.php" class="main-heading">PS Management</a>
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
					<a href="about_us.php" class="nav-link">About Us</a>
				</li>
				<li>
					<a href="contact.php" class="nav-link active-sidebar">Contact Us</a>
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
					<td colspan="4" class="heading_title">Contact Us</td>
				</td> 
			</tr>
			<tr>
				<th style="width: 50px;">Sn</th>
				<th >Name</th>
				<th >Email</th>
				<th >Message</th>
			</tr>
			<?php 
			$c=1;
			while($row=mysqli_fetch_assoc($result))
			{
				echo"<tr>";
				echo "<td>".$c."</td>";
				foreach($row as $key => $v)
				{
					echo "<td>".$v."</td>";
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