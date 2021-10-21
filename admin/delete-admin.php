<?php

//include constants.php file here

include('../config/constants.php');

 $id = $_GET['id'];

$sql="DELETE FROM tbl_admin WHERE id=$id";

$res=mysqli_query($conn,$sql);

if ($res==true) {
	// echo "Admin deleted successfully";

	$_SESSION['delete'] ="<div class='success'>Admin deleted successfully</div>";

	header('location:'.SITEURL.'admin/manage-admin.php');


}else{
	// echo "failed to delete admin";

	$_SESSION['delete'] ="<div class='error'>Admin couldn't be deleted</div>";
	header('location:'.SITEURL.'admin/manage-admin.php');



}
