<?php

// echo "Delete food page";
include('../config/constants.php');

if (isset($_GET['id']) AND isset($_GET['image_name'])) {
	// echo "Process to delete";

	$id=$_GET['id'];
	$image_name=$_GET['image_name'];

	//check whether the image is vailable or not
	if ($image_name!="") {
		$path="../images/food/".$image_name;

		//remove image file from folder

		$remove=unlink($path);

		if ($remove==false) {
			$_SESSION['upload']="<div class='error'>Failed to remove image file</div>";
			header('location:'.SITEURL.'admin/manage-food.php');
			die();
			
		}

	}	

		$sql="DELETE FROM tbl_food WHERE id=$id";
		$res=mysqli_query($conn,$sql);

		if ($res==true) {
			$_SESSION['unauthorized']="<div class='success'>Food deleted successfully</div>";
			header('location:'.SITEURL.'admin/manage-food.php');
			
		}
		else{
			$_SESSION['unauthorized']="<div class='error'>Failed to delete food</div>";
            header('location:'.SITEURL.'admin/manage-food.php');

		}

	}



else
{

	// echo "redirect";
	$_SESSION['delete']="<div class='error'>Unauthorized Access.</div>";
	header('location:'.SITEURL.'admin/manage-food.php');

}
