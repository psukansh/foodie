<?php include('partials-front/menu.php')  ?>

<form action="" method="POST" style="width: 1000px;height:400px;display:flex;justify-content:center;align-items:center;margin:auto">
	<div class="content" style="background-image: linear-gradient(120deg,rgb(112, 72, 255) ,rgb(160, 125, 255));padding:40px;width:500px;height:300px;color:white">

		<?php
		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$username = $_POST['username'];
			$password = $_POST['password'];

			$sql = "INSERT INTO tbl_login SET
			name='$name',
			email='$email',
	        username='$username',
	        password='$password'

	        ";


			$res = mysqli_query($conn, $sql);
			if ($res == true) {
				echo "data has been sent into database";
				header('location:' . SITEURL);
				header('location:' . SITEURL . 'home.php');
				$_SESSION['avator'] = "<div style='color:teal;font-size:25px'>Hello ,$username</div>";
			} else {
				echo "data has not sent yet into database.";
				header('location:' . SITEURL);
			}
		} else {
			// echo "button Not clicked yet";
		}
		?>

		<div class="box">
			<p>Name</p>
			<input type="text" placeholder="name" name="name" style="width: 500px;height:30px;border:1px solid black;border-radius:3px" required>
		</div>
		<br />

		<div class="box">
			<p>Email</p>
			<input type="text" placeholder="email" name="email" style="width: 500px;height:30px;border:1px solid black;border-radius:3px" required>
		</div>
		<br />



		<div class="box">
			<p>username</p>
			<input type="text" placeholder="username" name="username" style="width: 500px;height:30px;border:1px solid black;border-radius:3px" required>
		</div>
		<br />


		<div class="box">
			<p>password</p>
			<input type="password" placeholder="password" name="password" style="width: 500px;height:30px;border:1px solid black;border-radius:3px" required>
		</div>
		<br />
		<br />


		<button type="submit" name="submit" style="width:500px;background-color: black;color:white;padding:15px;text-align:center;outline:none;border:none;border-radius:3px;cursor:pointer">Create Account</button>


	</div>
</form>