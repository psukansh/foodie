<?php include('partial/menu.php') ?>

<div class="main-content">
	<div class="wrapper">
		<h1>Add Food</h1>

		<br />
		<br />

		<?php

		if (isset($_SESSION['upload'])) {
			echo $_SESSION['upload'];
			unset($_SESSION['upload']);
		}


		?>

		<br />
		<br />
		<form action="" method="POST" enctype="multipart/form-data">

			<table class="tbl-30">
				<tr>
					<td>Title:</td>
					<td>
						<input type="text" name="title" placeholder="Title of the Food">
					</td>
				</tr>

				<tr>
					<td>Description:</td>
					<td>
						<textarea name="description" cols="30" rows="5" placeholder="Description of the food "></textarea>
					</td>
				</tr>

				<tr>
					<td>Price:</td>
					<td>
						<input type="number" name="price">
					</td>
				</tr>

				<tr>
					<td>Select Image:</td>
					<td>
						<input type="file" name="image">
					</td>

				</tr>

				<tr>
					<td>Category:</td>

					<td><select name="category">

							<?php
							$sql = "SELECT * FROM tbl_category WHERE active='Yes'";

							$res = mysqli_query($conn, $sql);

							$count = mysqli_num_rows($res);

							if ($count > 0) {

								while ($row = mysqli_fetch_assoc($res)) {
									$id = $row['id'];
									$title = $row['title'];
							?>

									<option value="<?php echo $id ?>"><?php echo $title ?></option>



								<?php
								}
							} else {
								?>
								<option value="0">No category found 1</option>


							<?php



							}






							?>



						</select></td>
				</tr>

				<tr>
					<td>Featured:</td>
					<td>
						<input type="radio" name="featured" value="Yes">Yes
						<input type="radio" name="featured" value="No">No
					</td>
				</tr>

				<tr>
					<td>active:</td>
					<td>
						<input type="radio" name="active" value="Yes">Yes
						<input type="radio" name="active" value="No">No
					</td>
				</tr>

				<tr>
					<td colspan="2">
						<input type="submit" name="submit" value="Add food" class="btn-secondary">
					</td>
				</tr>
			</table>

		</form>


		<?php

		if (isset($_POST['submit'])) {

			// echo "button clicked";
			$title = $_POST['title'];
			$description = $_POST['description'];
			$price = $_POST['price'];
			$category = $_POST['category'];


			if (isset($_POST['featured'])) {
				$featured = $_POST['featured'];
			} else {
				$featured = "No";
			}


			if (isset($_POST['active'])) {
				$active = $_POST['active'];
			} else {
				$active = "No";
			}


			//check whwther image is selected or not..
			if (isset($_FILES['image']['name'])) {

				//get the details of the selected image
				$image_name = $_FILES['image']['name'];

				//check whether the image is selected or not and upload only if selected
				if ($image_name != "") {
					//rename the image

					$ext = end(explode('.', $image_name));

					//create new name for image
					$image_name = "food-name" . rand(0000, 9999) . '.' . $ext; //new image name 

					//get the source path and the destination path

					$src = $_FILES['image']['tmp_name'];

					//destination path
					$dst = "../images/food/" . $image_name;

					//finally upload image 

					$upload = move_uploaded_file($src, $dst);

					//whether image uploaded or not

					if ($upload == false) {
						$_SESSION['upload'] = "<div class='error'>Failed to upload image</div>";
						header('location:' . SITEURL . 'admin/add-food.php');

						die();
					}
				}
			} 
			
			else {
				$image_name = "";
			}

			$sql2 = "INSERT INTO tbl_food SET
			title='$title',
			description='$description',
			price=$price,
			image_name='$image_name',
			category_id=$category,
			featured='$featured',
			active='$active'";

			$res2 = mysqli_query($conn,$sql2);

			if ($res2 == true) {

				//data inserted successfully 
				$_SESSION['add'] = "<div class='success'>Food added successfully</div>";
				header('location:' . SITEURL . 'admin/manage-food.php');
			} else {

				$_SESSION['add'] = "<div class='error'>Couldn'nt added Food </div>";
				header('location:' . SITEURL . 'admin/manage-food.php');
			}
		}


		?>
	</div>
</div>

<?php include('partial/footer.php') ?>