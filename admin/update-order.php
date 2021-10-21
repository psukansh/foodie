<?php include('./partial/menu.php') ?>

<div class="main-content">
	<div class="wrapper">
		<h1>Update Order</h1>
		<br />
		<br />

		<?php

		if (isset($_GET['id'])) {

			$id = $_GET['id'];

			$sql = "SELECT * FROM tbl_order WHERE id=$id";

			$res = mysqli_query($conn, $sql);

			$count = mysqli_num_rows($res);

			if ($count == 1) {

				$row = mysqli_fetch_assoc($res);
				$food = $row['food'];
				$price = $row['price'];
				$qty = $row['qty'];
				$status = $row['status'];
				$customer_name = $row['customer_name'];
				$customer_contact = $row['customer_contact'];
				$customer_email = $row['customer_email'];
				$customer_address = $row['customer_address'];
			} else {
				header('location:' . SITEURL . 'admin/manage-order.php');
			}
		} else {
			header('location:' . SITEURL . 'admin/manage-order.php');
		}

		?>

		<form action="" method="POST">
			<table class="tbl-30">
				<tr>
					<td>Food Name</td>
					<td><?php echo $food; ?></td>
				</tr>

				<tr>
					<td>Price</td>
					<td>
						<?php echo $price; ?>
					</td>
				</tr>

				<tr>
					<td>Qty</td>
					<td>
						<input type="number" name="qty" value="<?php echo $qty; ?>">
					</td>
				</tr>

				<tr>
					<td>Status</td>
					<td>
						<select name="status">
							<option <?php if ($status == "Ordered") {echo "Selected";} ?>value="Ordered">Ordered</option>
							<option <?php if ($status == "On Delivery") {echo "Selected";} ?> value="On Delivery">On delivery</option>
							<option <?php if ($status == "Delivered") {echo "Selected";} ?>value="Delivered">Delivered</option>
							<option <?php if ($status == "Cancelled") {echo "Selected";} ?>value="Cancelled">Cancelled</option>


						</select>
					</td>
				</tr>

				<tr>
					<td>Customer Name</td>
					<td>
						<input type="text" name="customer_name" value="<?php echo $customer_name; ?>">
					</td>
				</tr>

				<tr>
					<td>Customer Contact</td>
					<td>
						<input type="text" name="customer_contact" value="<?php echo $customer_contact; ?>">
					</td>
				</tr>

				<tr>
					<td>Customer Email</td>
					<td>
						<input type="text" name="customer_email" value="<?php echo $customer_email; ?>">
					</td>
				</tr>

				<tr>
					<td>Customer Address</td>
					<td>
						<textarea name="customer_address" cols="30" rows="5" ><?php echo $customer_address; ?></textarea>
					</td>
				</tr>

				<br />
				<br />
				<br />



				<tr>
					<td clospan="2">
						<input type="hidden" name="id" value="<?php echo $id?>">
						<input type="hidden" name="price" value="<?php echo $price?>">
						<input type="submit" name="submit" value="Update Order" class="btn-secondary">
					</td>
				</tr>
			</table>
		</form>

		<?php

		//check whether update button is clicked or not

		if (isset($_POST['submit'])) {

			$id=$_POST['id'];
			$price=$_POST['price'];
			$qty=$_POST['qty'];
			$total= $price * $qty;
			$status=$_POST['status'];
			$id=$_POST['id'];

			$customer_name=$_POST['customer_name'];

			$customer_contact=$_POST['customer_contact'];

			$customer_email=$_POST['customer_email'];

			$customer_address=$_POST['customer_address'];

			$sql2="UPDATE tbl_order SET

			qty=$qty,
			total=$total,
			status='$status',
			customer_name='$customer_name',
			customer_contact='$customer_contact',
			customer_email='$customer_email',
			customer_address='$customer_address'

			WHERE id=$id
			";

			$res2=mysqli_query($conn,$sql2);

			if ($res2==true) {
				$_SESSION['update']="updated successfully";
				header('location:'.SITEURL.'admin/manage-order.php');
			}
			else{
				$_SESSION['update']="updat failed";
				header('location:'.SITEURL.'admin/manage-order.php');

			}
			
		}


?>

	</div>
</div>

<?php include('./partial/footer.php') ?>