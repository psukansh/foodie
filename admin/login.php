<?php
include('../config/constants.php')

?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login -Food Order System</title>
	<link rel="stylesheet" href="../css/admin.css">
</head>

<body style="background-image:url('https://images.unsplash.com/photo-1597291512790-e6895d5b46e4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1974&q=80');background-size:100% 100vh;background-repeat:no-repeat">

	<div class="login" style=" background-image:linear-gradient(120deg,rgb(255, 100, 255),rgb(0, 56, 88));color:white">
		<div class="head">
			<img src="../images/logo1.png" alt="" srcset="" width="100px" height="100px">
		<h1 class="text-center">Login </h1>
		</div>
		
		<br />
		<br />
		<?php


		if (isset($_SESSION['login'])) {
			echo $_SESSION['login'];
			unset($_SESSION['login']);
		}

		if (isset($_SESSION['no-login-message'])) {
			echo $_SESSION['no-login-message'];
			unset($_SESSION['no-login-message']);
		}

		?>

		<br />
		<br />

		<form action="" method="POST" class="text-center" >
			Username:
			<input type="text" name="username" placeholder="Enter username" style="border-radius: 3px;outline:none;background-color:transparent;color:white">
			<br />
			<br />

			Password:
			<input type="password" name="password" placeholder="Enter password" style="border-radius: 3px;outline:none;background-color:transparent;color:white">
			<br />
			<br />

			<input type="submit" name="submit" value="Login"  style="width: 100px;height:30px;background-color:white;color:black;border-radius:3px;font-weight:bold">
		</form>



		<!-- <p class="text-center">Created By .<a href="www.sukanshpendor.com">Sukansh pendor</a></p> -->
	</div>

</body>

</html>


<?php

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);



	//sql to chake whether the user with username with password exists or not

	$sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";
	$res = mysqli_query($conn, $sql);

	$count = mysqli_num_rows($res);

	if ($count == 1) {
		//user avaialable and login success

		$_SESSION['login'] = "<div  class='success' data-aos='slide-left' style='position:fixed;right:200px;transition:0.5s;margin-top:-50px'>Login SuccessFully</div>";

		$_SESSION['user'] = $username; //to chake whether the user is loged in or not
		header('location:' . SITEURL . 'admin/');
	} else {

		//user not available
		$_SESSION['login'] = "<div  class='error' >Login Error please try again</div>";
		header('location:' . SITEURL . 'admin/login.php');
	}
}


?>