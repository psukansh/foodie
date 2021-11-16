<?php include('partial/menu.php') ?>

<div class="main-content">
	<div class="wrapper">
		<h1>Add Category </h1>
		<br />
		<br />

		<?php

		if (isset($_SESSION['add'])) {
			echo $_SESSION['add'];
			unset($_SESSION['add']);
		}

		if (isset($_SESSION['uplaod'])) {
			echo $_SESSION['uplaod'];
			unset($_SESSION['uplaod']);
		}

		?>

		<br />
		<br />

		<form action="" method="POST" enctype="multipart/form-data">
			<table class="tbl-30">
				<tr>
					<td>Title</td>
					<td>
						<input type="text" name="title" placeholder="Category Title" style="height: 30px;border:1px solid white;outline:none;background-color:transparent;border-radius:3px;color:white">
					</td>
				</tr>

				<tr>
					<td>Select Image</td>
					<td>
						<input type="file" name="image">
					</td>
				</tr>

				<tr>
					<td>Featured</td>
					<td>
						<input type="radio" name="featured" value="Yes"> Yes
						<input type="radio" name="featured" value="No"> No
					</td>
				</tr>

				<tr>
					<td>Active</td>
					<td>
						<input type="radio" name="active" value="Yes"> Yes
						<input type="radio" name="active" value="No"> No

					</td>
				</tr>

				<tr>
					<td colspan="2">
						<input type="submit" name="submit" value="Add category" class="btn-secondary">
					</td>
				</tr>

			</table>
		</form>

		<?php

		if (isset($_POST['submit'])) {
			$title = $_POST['title'];

			//for radio input tag 
			if (isset($_POST['featured'])) {
				//get the value from form

				$featured = $_POST['featured'];
			} else {
				$featured = "No";
			}



			if (isset($_POST['active'])) {
				//get the value from form
				$active = $_POST['active'];
			} else {
				$active = "No";
			}

			// print_r($_FILES['image']);
			// die();




			//  Image selection 

			if (isset($_FILES['image']['name'])) {
				// upload the image
				$image_name = $_FILES['image']['name'];

				//upload only when upload is avialable
				if ($image_name != "") {



					//auto renaming the image 

					$ext = end(explode('.', $image_name));

					//rename the image

					$image_name = "food_category_" . rand(000, 999) . '.' . $ext;


					$source_path = $_FILES['image']['tmp_name'];

					$destination_path = "../images/category/" . $image_name;


					// upload the image

					$upload = move_uploaded_file($source_path, $destination_path);

					if ($upload == false) {
						$_SESSION['upload'] = "<div class='error'>Failed to upload image</div>";
						header('location:' . SITEURL . 'admin/add-category.php');
						die();
					}
				}
			} else {

				// dont upload image
				$image_name = "";
			}











			//create sql query to insert categories into database

			$sql = "INSERT INTO tbl_category SET
			title='$title',
			image_name='$image_name',
			featured='$featured',
			active='$active'";

			$res = mysqli_query($conn, $sql);

			if ($res == true) {

				//query executed and category added
				$_SESSION['add'] = "<div class='success' data-aos='slide-left' style='position:fixed;right:200px;transition:0.3s'>Category added successfully</div>";
				header('location:' . SITEURL . 'admin/manage-category.php');
			} else {

				//fail to add category
				$_SESSION['add'] = "<div class='error' data-aos='slide-left' style='position:fixed;right:200px;transition:0.3s'>Failed to add </div>";
				header('location:' . SITEURL . 'admin/add-category.php');
			}
		}




		?>

	</div>
</div>


<?php include('partial/footer.php') ?>
