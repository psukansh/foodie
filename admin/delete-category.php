<?php

include("../config/constants.php");
//check whether the id and image_name value is set or not..

if (isset($_GET['id']) AND isset($_GET['image_name'])) {

// echo "Get value and delete";

$id=$_GET['id'];
$image_name=$_GET['image_name'];

//remove the physical image file if available 

if ($image_name!="") {
	//image is available
	$path="../images/category/".$image_name;
	$remove=unlink($path);


	if ($remove==false) {
		//set the session massage

		$_SESSION['remove']="<div class='error'>Failed to remove image</div>";

		header('location:'.SITEURL.'admin/manage-category.php');

		//redirect to manage category page

		die();
	}
}

//sql query data from database..
$sql="DELETE FROM tbl_category WHERE id=$id";

$res =mysqli_query($conn,$sql);

//check whether data is deleted or not

if ($res==true) {

	$_SESSION['delete']="<div class='success' data-aos='slide-left' style='position:fixed;right:200px;transition:0.3s'>Deleted successfully</div>";
	header('location:'.SITEURL.'admin/manage-category.php');
}else{

	$_SESSION['delete']="<div class='error' data-aos='slide-left' style='position:fixed;right:200px;transition:0.3s'>Couldn't be deleted</div>";
    header('location:'.SITEURL.'admin/manage-category.php');
}



//delete data from database and redirect to manage category page with massege..

	
}
else
{
  
  header("location:".SITEURL.'admin/manage-category.php');
}
