<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Create User</title>
	<link rel="icon" href="../images/sm.png" type="image/png">
	<script src="https://kit.fontawesome.com/e08bae14af.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../css/all.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<style type="text/css">
		body
		{
			background-color: #343a40;
		}
		.login {
			width: 400px;
			margin: 39px auto;
			font-size: 16px;
		}
		.heading-login
		{
			background: #009688;
			padding: 1px;
			font-size: 1.4em;
			font-weight: normal;
			text-align: center;
			text-transform: uppercase;
			color: #fff;
		}
		.dashboard-login-logo
		{
			height: 100px;
			width: 200px;
		}
		.inputfile{
			padding: 10px;
			color: #0000009c;
			background-color: white;
			border: 0.1px solid black; 
			display: block;
			border: none;
			width: 331px;
			text-align: center;
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
	<div class="heading-login">
		<img src="../images/sm.png" class="dashboard-login-logo">
		<!-- Welcome to Public Service Management -->
	</div> 
	<div class="login">
		<div class="login-triangle"></div>
		<h2 class="login-header">Create User</h2>
		<form class="login-container" autocomplete="off" action="../../php/insertUser.php" method="post" enctype="multipart/form-data">
			<p><input type="text" id="username" placeholder="Username" name="Name"></p>
			<p><input type="password" id="password" placeholder="Password" autocomplete="new-password" name="password"></p>
			<p><input type="text" placeholder="Email" name="email"></p>
			<p><input type="text" placeholder="Phone" name="phone"></p>
			<p>
				<label class="inputfile"> Upload File
					<input type="file" size="60" name="image">
				</label>
			</p>
			<p><input type="submit" value="Create User" onclick="validateForm();"></p>
		</form>
	</div>
	<script type="text/javascript">
		function validateForm()
		{
			var username=document.getElementById('username').value;
			var password=document.getElementById('password').value;
			if(username==''||password=='')
			{
				alert("Username and Password Required");
			}
			else
			{
				// window.location.href = '../../php/loginCheck.php';
			}
		}
	</script>
</body>
</html>