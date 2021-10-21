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
			<h1>Manage Order</h1>
			<br/>
			<br/>
			<br/>

			<?php

			if (isset($_SESSION['update'])) {
				echo $_SESSION['update'];
				unset($_SESSION['update']);
			}
			?>
			





			<table class="tbl-full" style="background-color: rgb(0, 19, 41);color:white">
				<tr style="background-color: white;color:black;padding:0px 10px">
					<th style="font-size: 13px;padding:3px;font-weight:bold">S.NO</th>
					<th style="font-size: 13px;padding:3px;font-weight:bold;width:100px">Food</th>
					<th style="font-size: 13px;padding:3px;font-weight:bold">Price</th>
					<th style="font-size: 13px;padding:3px;font-weight:bold">Qty</th>
					<th style="font-size: 13px;padding:3px;font-weight:bold;width:80px;">Total</th>
					<th style="font-size: 13px;padding:3px;font-weight:bold;width:150px">Order Date</th>
					<th style="font-size: 13px;padding:3px;font-weight:bold;width:100px">Status</th>
					<th style="font-size: 13px;padding:3px;font-weight:bold;width:150px">Customer Name</th>
					<th style="font-size: 13px;padding:3px;font-weight:bold;width:250px">Customer Contact</th>
					<th style="font-size: 13px;padding:3px;font-weight:bold;width:250px">Customer Email</th>
					<th style="font-size: 13px;padding:3px;font-weight:bold;width:200px">Customer Address</th>
					<th style="font-size: 13px;padding:3px;font-weight:bold;width:250px">Actions</th>
				</tr>

				<?php

				$sql = "SELECT * FROM tbl_order ORDER BY id DESC";

				$res = mysqli_query($conn, $sql);

				$count = mysqli_num_rows($res);
				$sn=1;

				if ($count > 0) {

					while ($row = mysqli_fetch_assoc($res)) {
						$id = $row['id'];
						$food = $row['food'];
						$price = $row['price'];
						$qty = $row['qty'];
						$total = $row['total'];
						$order_date = $row['order_date'];
						$status = $row['status'];
						$customer_name = $row['customer_name'];
						$customer_contact = $row['customer_contact'];
						$customer_email = $row['customer_email'];
						$customer_address = $row['customer_address'];
				?>
						<tr >
							<td style="font-size: 13px;"><?php echo $sn++; ?></td>
							<td style="font-size: 13px;"><?php echo $food; ?></td>
							<td style="font-size: 13px;"><?php echo $price; ?></td>
							<td style="font-size: 13px;"><?php echo $qty; ?></td>
							<td style="font-size: 13px;"><?php echo $total; ?></td>
							<td style="font-size: 13px;"><?php echo $order_date; ?></td>

							<td style="font-size: 13px;"><?php  
							
							if ($status=="Ordered") {
								echo "<label>$status</label>";
							} 
							elseif ($status=="On Delivery"){
								echo "<label style='color:orange'>$status</label>";

							}
							elseif ($status=="Delivered"){
								echo "<label style='color:yellowgreen'>$status</label>";

							}
							elseif ($status=="Cancelled"){
								echo "<label style='color:red'>$status</label>";
							}
							
							?></td>

							<td style="font-size: 13px;"><?php echo $customer_name; ?></td>
							<td style="font-size: 13px;"><?php echo $customer_contact; ?></td>
							<td style="font-size: 13px;"><?php echo $customer_email; ?></td>
							<td style="font-size: 13px;"><?php echo $customer_address; ?></td>
							<td style="font-size: 13px;">
								<a href="<?php echo SITEURL; ?>admin/update-order.php?id=<?php echo $id ?>" style="padding:7px;border-radius:5px;background-color:blueviolet;color:white;text-decoration:none">Update Order</a>
							</td>
							<!-- class="btn-secondary" -->
							<!-- class="btn-danger" -->
						</tr>


				<?php


					}
				} else {

					echo "Orders Not Made yet";
				}

				?>























			</table>


		</div>
	</div>
	</div>

	<?php include('partial/footer.php') ?>