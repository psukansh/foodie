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
			<h1>Manage Admin</h1>

			<br />
			<br />

			<?php

			if (isset($_SESSION['add'])) {

				echo $_SESSION['add']; // displatying session message

				unset($_SESSION['add']); //removing session message
			}

			if (isset($_SESSION['delete'])) {

				echo $_SESSION['delete']; // displatying session message
				unset($_SESSION['delete']); //removing session message

			}

			if (isset($_SESSION['update'])) {
				echo $_SESSION['update']; // displatying session message
				unset($_SESSION['update']); //removing session message

			}

			if (isset($_SESSION['user-not-found'])) {
				echo $_SESSION['user-not-found']; // displatying session message
				unset($_SESSION['user-not-found']); //removing session message

			}

			if (isset($_SESSION['password-not-match'])) {
				echo $_SESSION['password-not-match']; // displatying session message
				unset($_SESSION['password-not-match']); //removing session message

			}

			if (isset($_SESSION['change-pwd'])) {
				echo $_SESSION['change-pwd']; // displatying session message
				unset($_SESSION['change-pwd']); //removing session message

			}

			if (isset($_SESSION['change-not-pwd'])) {
				echo $_SESSION['change-not-pwd']; // displatying session message
				unset($_SESSION['change-not-pwd']); //removing session message

			}


			?>
			<br />
			<br />
			<br />

			<a href="add-admin.php" class="btn-primary">Add Admin</a>

			<br />
			<br />
			<br />

			<table class="tbl-full">
				<tr>
					<th>S.NO</th>
					<th>Full Name</th>
					<th>username</th>
					<th>Actions</th>
				</tr>


				<?php


				$sql = "SELECT * FROM tbl_admin";
				$res = mysqli_query($conn, $sql);

				if ($res == true) {
					//count rows to chake whether we have data and datbase
					$rows = mysqli_num_rows($res); ///get all the rows from database
					$sn = 1;

					if ($rows > 0) {

						//we have database
						while ($rows = mysqli_fetch_assoc($res)) {
							//using while loop to get all the data from database
							//And while loop will executw as long as we have the data

							$id = $rows['id'];
							$full_name = $rows['full_name'];
							$username = $rows['username'];

							//display the values in table
				?>


							<tr>
								<td><?php echo $sn++ ?></td>
								<td><?php echo $full_name ?></td>
								<td><?php echo $username ?></td>
								<td>
									<a href="<?php echo SITEURL; ?>admin/update-password.php?id=<?php echo $id; ?>" class="btn-primary">Change password</a>
									<a href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary">Update admin</a>
									<a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">Delete admin</a>
								</td>
							</tr>




				<?php
						}
					} else {

						//we dont have database

					}
				}


				?>

			</table>


		</div>
	</div>
	</div>

	<?php include('partial/footer.php') ?>