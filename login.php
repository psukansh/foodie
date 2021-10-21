<?php include('partials-front/menu.php')  ?>

<form action="" method="POST" style="width: 1000px;height:400px;display:flex;justify-content:center;align-items:center;margin:auto">
	<div class="content" style="background-image: linear-gradient(120deg,rgb(112, 72, 255) ,rgb(160, 125, 255));padding:40px;width:500px;height:300px;color:white">

		<?php

		if (isset($_POST['submit'])) {
			// echo "button clicked";
			$username = $_POST['username'];
			$password = $_POST['password'];

			$sql = "SELECT * FROM tbl_login WHERE username='$username' AND password='$password'";

			$res = mysqli_query($conn, $sql);

			$count = mysqli_num_rows($res);

			if ($count == 1) {
				header('location:' . SITEURL.'home.php');
				$_SESSION['avator'] = "<div style='color:teal;font-size:25px'>Hello ,$username</div>";
				# code...
			} else {
				echo "invalid credentials please enter valid details";
			}
		} else {
			// echo "button not clicked yet";
			// header('location:'.SITEURL);
		}

		?>
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
		<button  style="width:300px;background-color: blue;color:white;padding:15px;text-align:center;outline:none;border:none;border-radius:3px;cursor:pointer"> <a href="<?php echo SITEURL; ?>register.php"> Register</a> </button>
		<br />
		<br />


		<button type="submit" name="submit" style="width:500px;background-color: black;color:white;padding:15px;text-align:center;outline:none;border:none;border-radius:3px;cursor:pointer">Login</button>


	</div>
</form>









<?php include('partials-front/footer.php')  ?>