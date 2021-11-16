<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Food order Website - Home page</title>
	<link rel="stylesheet" href="../css/admin.css">
</head>

<body>
	<?php include('partial/menu.php'); ?>

	</div>

	<div class="main-content">
		<div class="wrapper">
			<h1>Manage Category</h1>

			<br />
			<br />

			<?php
			if (isset($_SESSION['add'])) {
				echo $_SESSION['add'];
				unset($_SESSION['add']);
			}

			if (isset($_SESSION['remove'])) {
				echo $_SESSION['remove'];
				unset($_SESSION['remove']);
			}

			if (isset($_SESSION['delete'])) {
				echo $_SESSION['delete'];
				unset($_SESSION['delete']);
			}

			if (isset($_SESSION['no-category-found'])) {
				echo $_SESSION['no-category-found'];
				unset($_SESSION['no-category-found']);
			}

			if (isset($_SESSION['update'])) {
				echo $_SESSION['update'];
				unset($_SESSION['update']);
			}

			if (isset($_SESSION['upload'])) {
				echo $_SESSION['upload'];
				unset($_SESSION['upload']);
			}

			if (isset($_SESSION['failed-remove'])) {
				echo $_SESSION['failed-remove'];
				unset($_SESSION['failed-remove']);
			}
			?>

			<br />
			<br />

			<a href="<?php echo SITEURL; ?>/admin/add-category.php" class="btn-primary">Add Category</a>

			<br />
			<br />
			<br />


			<table class="tbl-full">
				<tr>
					<th>S.NO</th>
					<th>Title</th>
					<th>Image</th>
					<th>Featured</th>
					<th>Active</th>
				</tr>


				<?php

				$sql = "SELECT * FROM tbl_category";

				$res = mysqli_query($conn, $sql);

				$count = mysqli_num_rows($res);

				$sn = 1;

				//check whether we have data in our database

				if ($count > 0) {

					while ($row = mysqli_fetch_assoc($res)) {
						$id = $row['id'];
						$title = $row['title'];
						$image_name = $row['image_name'];
						$featured = $row['featured'];
						$active = $row['active'];



				?>
						<tr>
							<td><?php echo $sn++ ?></td>
							<td><?php echo $title ?></td>
							<td>
								<?php
								if ($image_name != "") {

								?>
									<img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" width="70px" height="70px" style="border-radius: 3px;">

								<?php

								} else {
									echo "<div class='error'>Image Not added</div>";
								}

								?>

							</td>
							<td><?php echo $featured ?></td>
							<td><?php echo $active ?></td>
							<td>
								<a href="<?php echo SITEURL; ?>admin/update-category.php?id=<?php echo $id; ?>" class="btn-secondary">Update Category</a>
								<a href="<?php echo SITEURL; ?>admin/delete-category.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="btn-danger">Delete Category</a>
							</td>





						<?php
					}
				} else {
						?>

						<tr>
							<td colspan="6">
								<div class="error">No Category Added</div>
							</td>
						</tr>





					<?php
				}

					?>


					</tr>

			</table>


		</div>
	</div>
	</div>

	<?php include('partial/footer.php') ?>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init({
			offset: 200, // offset (in px) from the original trigger point
			delay: 0, // values from 0 to 3000, with step 50ms
			duration: 300, // values from 0 to 3000, with step 50ms
			easing: 'ease-in',
		});
	</script>