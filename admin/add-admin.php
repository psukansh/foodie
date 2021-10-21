<?php include('partial/menu.php') ?>

<div class="main-content">
	<div class="wrapper">
		<h1>Add Admin</h1>
		<br />
		<br />

		<?php

		if (isset($_SESSION['add'])) {
			echo $_SESSION['add'];
			unset($_SESSION['add']);
		}

		?>


		<form action="" method="POST">
			<table class="tbl-30">
				<tr>
					<td>Full Name</td>
					<td><input type="text" name="full_name" placeholder="Enter your name"></td>
				</tr>

				<tr>
					<td>username</td>
					<td>
						<input type="text" name="username" placeholder="your username">
					</td>
				</tr>

				<tr>
					<td>password</td>
					<td>
						<input type="password" name="password" placeholder=" your password">
					</td>
				</tr>

				<tr>
					<td colspan="2">
						<input type="submit" name="submit" value="Add Admin" class="btn-secondary">
					</td>
				</tr>


			</table>
		</form>
	</div>
</div>


<?php include('partial/footer.php') ?>


<?php

//check whether the button is clicked on not

if (isset($_POST['submit'])) {


	//get the data from the form

	$full_name = $_POST['full_name'];
	$username = $_POST['username'];
	$password = md5($_POST['password']); //password Encryption with md5


	//sql query to save data into database

	$sql = "INSERT INTO tbl_admin SET
	 full_name='$full_name',
	 username='$username',
	 password='$password'
	 ";



	//executing query and entering data into database

	$res = mysqli_query($conn, $sql) or die(mysqli_error($conn));



	//check whether the data is inserted or not and display update massage

	if ($res == true) {
		//  echo "data inserted";

		//create a session variable
		$_SESSION['add'] = "Admin added succecssfully";


		//page redirecting
		header("location:" . SITEURL . 'admin/manage-admin.php');
	} else {
		//  echo "fail to insert data";

		//create a session variable
		$_SESSION['add'] = "Failed to add Admin";
		//page redirecting Add admin
		header("location:" . SITEURL . 'admin/add-admin.php');
	}
}







?>