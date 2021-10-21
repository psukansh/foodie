<?php include('partial/menu.php'); ?>

<div class="main-content">
	<div class="wrapper">
		<h1>Change Password</h1>
		<br />
		<br />

		<?php


		if (isset($_GET['id'])) {
			$id = $_GET['id'];
		}


		?>

		<form action="" method="POST">

			<table class="tbl-30">
				<tr>
					<td>Current password:</td>
					<td>
						<input type="password" name="current_password" placeholder="Current password">
					</td>
				</tr>

				<tr>
					<td>New Password:</td>
					<td>
						<input type="password" name="new_password" placeholder="new password">

					</td>
				</tr>

				<tr>
					<td>Confirm password:</td>
					<td>
						<input type="password" name="confirm_password" placeholder="confirm password">
					</td>
				</tr>

				<tr>
					<td colspan="2">
						<input type="hidden" name="id" value="<?php echo $id ?>">
						<input type="submit" name="submit" value="Change Password" class="btn-secondary">
					</td>
				</tr>

			</table>


		</form>
	</div>
</div>


<?php

//check whether the submit button is clicked or not

if (isset($_POST['submit'])) {
	// echo "clicked";

	//get the data from form
	$id = $_POST['id'];
	$current_password = md5($_POST['current_password']);
	$new_password = md5($_POST['new_password']);
	$confirm_password = md5($_POST['confirm_password']);


	$sql = "SELECT * FROM tbl_admin WHERE id=$id AND password='$current_password'";

	//query execute

	$res = mysqli_query($conn, $sql);

	if ($res == true) {

		$count = mysqli_num_rows($res);

		if ($count == 1) {

			//users exists
			echo "user found";
			if ($new_password == $confirm_password) {

				// echo "password matched";
				$sql2 = "UPDATE tbl_admin SET 
				password='$new_password',
				WHERE id=$id";

				$res2 = mysqli_query($conn, $sql2);
				if ($res == true) {

					// password chnaged succesfully
					$_SESSION['change-pwd'] = "<div class='success'>Password changed successfully</div>";
					header('location:' . SITEURL . 'admin/manage-admin.php');
				} else {

					//password not chnaged succesfully
					$_SESSION['change-not-pwd'] = "<div class='error'>Filed to change the password</div>";
					header('location:' . SITEURL . 'admin/manage-admin.php');
				}
			} else {
				// user does not exists
				$_SESSION['password-not-match'] = "<div class='error'>Password did not match try again...</div>";
				header('location:' . SITEURL . 'admin/manage-admin.php');
			}
		} else {

			// user does not exists
			$_SESSION['user-not-found'] = "<div class='error'>user not found</div>";
			header('location:' . SITEURL . 'admin/manage-admin.php');
		}
	}






	//check whether the user id and password exists or not


	//check password and confirm password
}


?>


<?php include('partial/footer.php'); ?>