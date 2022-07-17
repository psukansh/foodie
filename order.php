<?php include('partials-front/menu.php') ?>

<?php

if (isset($_GET['food_id'])) {
    $food_id = $_GET['food_id'];

    //get the details of the selected food...
    $sql = "SELECT * FROM tbl_food WHERE id=$food_id";
    $res = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($res);

    if ($count == 1) {
        //get the data from database
        $row = mysqli_fetch_assoc($res);
        $title = $row['title'];
        $price = $row['price'];
        $image_name = $row['image_name'];
    } else {
        header('location:' . SITEURL);
    }
} else {
    header('location:' . SITEURL);
}

?>

<!-- fOOD sEARCH Section Starts Here -->
<section class="food-search">
    <div class="container">

        <form action="" method="POST" class="order">
            <h2 style="color: rgb(0, 255, 149)">Selected Food</h2>
            <div class="detail-box">


                <div class="food-menu-img">

                    <?php

                    //check whether the image is available or not...
                    if ($image_name == "") {
                        echo "Image Not Available..";
                    } else {
                    ?>
                        <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" >

                    <?php

                    }


                    ?>

                </div>

                <div class="order-detail">
                    <h3><?php echo $title; ?></h3>
                    <input type="hidden" name="food" value="<?php echo $title; ?>">
                    <br />
                    <br />
                    <br />
                    <br />
                    <p class="food-price">Rs <?php echo $price; ?></p>

                    <input type="hidden" name="price" value="<?php echo $price; ?>">
                    <!-- <br /> -->
                    <!-- <br /> -->
                    <!-- <br /> -->
                    <!-- <br /> -->

                    <div class="order-label" style="color: black;">Quantity</div>
                    <input type="number" name="qty" class="input-responsive" value="1" required>
                    <br />
                    <br />
                    <br />
                    <br />

                </div>

            </div>

            <div class="info-box" style="display:flex;flex-direction:column">
                <h3 style="color: rgb(0, 255, 149)">Delivery Details</h3>
                <div class="order-label">Full Name</div>
                <input type="text" name="full-name" placeholder="Enter FullName" class="info-box-input" required>
                <br />
                <br />

                <div class="order-label">Phone Number</div>
                <input type="tel" name="contact" placeholder="Enter Mo.No" class="info-box-input" required>
                <br />
                <br />

                <div class="order-label">Email</div>
                <input type="email" name="email" placeholder="Enter Email" class="info-box-input" required>
                <br />
                <br />

                <div class="order-label">Address</div>
                <textarea name="address" rows="10" placeholder="Enter Address.." class="info-box-input" required></textarea>
                <br />
                <br />

                <input type="submit" name="submit" value="Confirm Order" style="width: 200px;background-color:orange;padding:10px;color:white;outline:none;border:none;border-radius:5px;cursor:pointer">
            </div>

        </form>

        <?php
        // date_default_timezone_get("Asia/Kolakata");

        if (isset($_POST['submit'])) {
            //get all details from the form

            $food = $_POST['food'];
            $price = $_POST['price'];
            $qty = $_POST['qty'];

            $total = $price * $qty;



            $order_date = date('Y-m-d');

            $status = "Ordered";

            $customer_name = $_POST['full-name'];

            $customer_contact = $_POST['contact'];

            $customer_email = $_POST['email'];

            $customer_address = $_POST['address'];

            //save into the database

            $sql2 = " INSERT INTO tbl_order SET 
            food= '$food',
            price= $price,
            qty=   $qty,
            total= $total,
            order_date='$order_date',
            status='$status',
            customer_name='$customer_name',
            customer_contact='$customer_contact',
            customer_email='$customer_email',
            customer_address='$customer_address' ";


            // echo $sql2;die();


            $res2 = mysqli_query($conn, $sql2);

            if ($res2 == true) {
                $_SESSION['order'] = "<div data-aos='slide-left' style='position:fixed;top:200px;right:200px;transition:0.3s;background-color:yellowgreen;border-radius:25px;color:white;padding:10px'>Ur order has placed</div>";
                echo ("<script>location.href = '" . SITEURL . "index.php?msg=review';</script>");
            } else {
                $_SESSION['order'] = "<div  data-aos='slide-left' style='position:fixed;top:200px;right:200px;transition:0.3s;background-color:red;border-radius:25px;color:white;padding:10px'>Failed to order</div>";
                echo ("<script>location.href = '" . SITEURL . "index.php?msg=review';</script>");
            }
        }

        ?>


    </div>
</section>
<!-- fOOD sEARCH Section Ends Here -->
<?php include('partials-front/footer.php') ?>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 200, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 700, // values from 0 to 3000, with step 50ms
        easing: 'ease',
    });
</script>

<script src="js/index.js"></script>