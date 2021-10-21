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
			<h1>Manage Food</h1>

			<br />
			<br />

			<?php

			if (isset($_SESSION['add'])) {
				echo $_SESSION['add'];
				unset($_SESSION['add']);
			}


			if (isset($_SESSION['delete'])) {
				echo $_SESSION['delete'];
				unset($_SESSION['delete']);
			}

			if (isset($_SESSION['upload'])) {
				echo $_SESSION['upload'];
				unset($_SESSION['upload']);
			}

			if (isset($_SESSION['unauthorized'])) {
				echo $_SESSION['unauthorized'];
				unset($_SESSION['unauthorized']);
			}

			if (isset($_SESSION['unauthorized'])) {
				echo $_SESSION['unauthorized'];
				unset($_SESSION['unauthorized']);
			}

			if (isset($_SESSION['remove-failed'])) {
				echo $_SESSION['remove-failed'];
				unset($_SESSION['remove-failed']);
			}

			if (isset($_SESSION['update'])) {
				echo $_SESSION['update'];
				unset($_SESSION['update']);
			}

			?>




			<br />
			<br />

			<a href="<?php echo SITEURL; ?>admin/add-food.php" class="btn-primary">Add Food</a>

			<br />
			<br />
			<br />

			<table class="tbl-full"  >
				<tr>
					<th>S.NO</th>
					<th>Title</th>
					<th>Description</th>
					<th>Price</th>
					<th>Image</th>
					<th>Featured</th>
					<th>Active</th>
					<th>Actions</th>

				</tr>


				<?php

				$sql = "SELECT * FROM tbl_food";
				$res = mysqli_query($conn, $sql);

				$count = mysqli_num_rows($res);

				$sn = 1;

				if ($count > 0) {

					while ($row = mysqli_fetch_assoc($res)) {
						$id = $row['id'];
						$title = $row['title'];
						$description = $row['description'];
						$price = $row['price'];
						$image_name = $row['image_name'];
						$featured = $row['featured'];
						$active = $row['active'];

				?>
						<tr>
							<td ><?php echo $sn++; ?></td>
							<td><?php echo $title ?></td>
							<td style="width: 250px"><?php echo $description ?></td>
							<td>Rs. <?php echo $price ?></td>
							<td>
								<?php

								//check whether we have image or not
								if ($image_name == "") {
									echo "<div style='color:red'>Image not added</div>";
								} else {

								?>

									<img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="" srcset="" width="120px " height="100px">

								<?php
								}



								?>
							</td>
							<td ><?php echo $featured ?></td>
							<td><?php echo $active ?></td>
							<td>
								<a href="<?php echo SITEURL; ?>admin/update-food.php?id=<?php echo $id ?>" class="btn-secondary">Update Food</a>
								<a href="<?php echo SITEURL; ?>admin/delete-food.php?id=<?php echo $id ?>&image_name=<?php echo $image_name; ?>" class="btn-danger">Delete Food</a>
							</td>
						</tr>



				<?php
					}
				} else {
					echo "<tr><td colspan='7' style='color:red'>Food Not added yet...</td></tr>";
				}


				?>

















			</table>


		</div>
	</div>
	</div>

	<?php include('partial/footer.php') ?>