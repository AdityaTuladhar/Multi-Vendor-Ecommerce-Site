<!DOCTYPE html>
<html>
<head>
	<title> Login</title>
	<link rel="icon" href="../images/sm.png" type="image/png">
	<script src="https://kit.fontawesome.com/e08bae14af.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../css/all.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<style type="text/css">
		body
		{
			background-color: #343a40;
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
	</style>
</head>
<body>
	<div class="heading-login">
		<img src="../images/sm.png" class="dashboard-login-logo">
		<!-- Welcome to Public Service Management -->
	</div> 
	<div class="login">
		<div class="login-triangle"></div>
		<h2 class="login-header">Log in</h2>
		<form class="login-container" autocomplete="off" action="../../php/loginCheck.php" method="post">
			<p><input type="text" id="username" placeholder="Username" name="username"></p>
			<p><input type="password" id="password" placeholder="Password" autocomplete="new-password" name="password"></p>
			<p>
				<input type="checkbox" id="remember">
				<label for="remember" id="checkbox">Remember me</label>
			</p>
			<p><input type="submit" value="Log in" onclick="validateForm();"></p>
			<p style="text-align: center;"> 
				<a href="createUser.php">
					Create User <i class='fa fa-arrow-right' aria-hidden='true'></i>
				</a>
			</p>
		</form>
	</div>
	<script type="text/javascript" src="../js/custom.js"></script>
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
				window.location.href = '../../php/loginCheck.php';
			}
		}
	</script>
</body>
</html>