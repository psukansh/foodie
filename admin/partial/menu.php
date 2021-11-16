<?php 

include('../config/constants.php');
include('login-check.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Food order Website - Home page</title>
	<link rel="stylesheet" href="../css/admin.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="icon" href="../../images/spf logo.jpg">
</head>

<body>
	<div class="menu">
		<div class="logo" style="display: flex;align-items:center;justify-content:center">
			<h1>Food </h1>
		<img src="../images/logo1.png" alt="" srcset="" width="100px" height="100px">
		</div>


		<div class="wrapper">

			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="manage-admin.php">Admin </a></li>
				<li><a href="manage-category.php">Category</a></li>
				<li><a href="manage-food.php">Food</a></li>
				<li><a href="manage-order.php">Order</a></li>
				<li><a href="logout.php">Logout</a></li>

			</ul>

		</div>

	</div>