<?php 

//check whether the user is loged in or not

if(!isset($_SESSION['user'])){ //id user session is not set
    
	//user not login

	$_SESSION['no-login-message'] ="<div class='error'>Please login to access admin panel</div>";
	header('location:'.SITEURL.'admin/login.php');
}





?>
