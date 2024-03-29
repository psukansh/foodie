<?php include('partial/menu.php') ?>

<div class="main-content">
	<div class="wrapper">
		<h1>Update Category</h1>
		<br />
		<br />

		<?php

		if (isset($_GET['id'])) {

			// echo "getting the data";
			$id = $_GET['id'];

			//create sql query to get all data
			$sql = "SELECT * FROM tbl_category WHERE id=$id";

			//query execute

			$res = mysqli_query($conn, $sql);

			$count = mysqli_num_rows($res);

			if ($count == 1) {

				$row = mysqli_fetch_assoc($res);
				$title = $row['title'];
				$current_image = $row['image_name'];
				$featured = $row['featured'];
				$active = $row['active'];
			} else {

				$_SESSION['no-category-found'] = "<div class='error'>Category Not found</div>";
				header('location:' . SITEURL . 'admin/manage-category.php');
			}
		} else {

			header('location:' . SITEURL . 'admin/manage-category.php');
		}


		?>
		<form action="" method="POST" enctype="multipart/form-data">
			<table class="tbl-30">
				<tr>
					<td>Title</td>
					<td>
						<input type="text" name="title" value="<?php echo $title; ?>">
					</td>

				</tr>

				<tr>
					<td>Current Image:</td>
					<td>
						<?php

						if ($current_image != "") {

						?>
							<img src="<?php echo SITEURL; ?>images/category/<?php echo $current_image; ?>" width="150px" height="150px" style="border-radius: 5px;">

						<?php

						} else {
							echo "<div class='error'>Image is not added</div>";
						}

						?>
					</td>
				</tr>

				<tr>
					<td>New Image:</td>
					<td>
						<input type="file" name="image">
					</td>
				</tr>

				<tr>
					<td>Featured</td>
					<td>
						<input <?php if ($featured == "Yes") {
									// echo "checked";
								} ?> type="radio" name="featured" value="Yes">Yes
						<input <?php if ($featured == "No") {
									// echo "checked";
								} ?>type="radio" name="featured" value="No">NO
					</td>
				</tr>

				<tr>
					<td>Active</td>
					<td>
						<input <?php if ($active == "Yes") {
									// echo "checked";
								} ?> type="radio" name="active" value="Yes">Yes
						<input <?php if ($active == "No") {
									// echo "checked";
								} ?>type="radio" name="active" value="No">NO
					</td>
				</tr>

				<tr>
					<td>
						<input type="hidden" name="current_image" value="<?php echo $current_image ?>">
						<input type="hidden" name="id" value="<?php echo $id ?>">
						<input type="submit" name="submit" value="Update Category" class="btn-secondary">

					</td>

				</tr>
			</table>
		</form>

		<?php

		if (isset($_POST['submit'])) {
			// echo "clicked";

			$id = $_POST['id'];
			$title = $_POST['title'];
			$current_image = $_POST['current_image'];
			$featured = $_POST['featured'];
			$active = $_POST['active'];


			//check whether the image is selected or not
			if (isset($_FILES['image']['name'])) {

				$image_name = $_FILES['image']['name'];

				if ($image_name!="") {

					$ext = end(explode('.', $image_name));
					//rename the image
					$image_name = "food_category_" . rand(000, 999) . '.' . $ext;

					$source_path = $_FILES['image']['tmp_name'];

					$destination_path = "../images/category/" . $image_name;

					// upload the image
					$upload = move_uploaded_file($source_path, $destination_path);

					if ($upload == false) {

						$_SESSION['upload'] = "<div class='error'>Failed to upload image</div>";

						header('location:' . SITEURL . 'admin/manage-category.php');

						die();
					}

					if ($current_image!="") {
						$remove_path = "../images/category/".$current_image;
						$remove = unlink($remove_path);
						if ($remove == false) {
							$_SESSION['failed-remove'] = "<div class='error'>Failed to remove current image</div>";
							header('location:' . SITEURL . 'admin/manage-category.php');
							die();
						}
					}
				} else {
					$image_name = $current_image;
				}
			} else {
				$image_name = $current_image;
			}



			//updating image

			$sql2 = "UPDATE tbl_category SET 
		title='$title',
		image_name='$image_name',
		featured='$featured',
		active='$active'
		WHERE id=$id
		";



			$res2 = mysqli_query($conn, $sql2);

			if ($res2 == true) {
				$_SESSION['update'] = "<div class='success' data-aos='slide-left' style='position:fixed;right:200px;transition:0.3s'>Category Updated successfully</div>";
				header('location:' . SITEURL . 'admin/manage-category.php');
			} else {

				$_SESSION['update'] = "<div class='error' data-aos='slide-left' style='position:fixed;right:200px;transition:0.3s'>Failed to update Category</div>";
				header('location:' . SITEURL . 'admin/manage-category.php');
			}
		}


		?>
	</div>
</div>

<?php include('partial/footer.php') ?>