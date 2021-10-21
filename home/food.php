<?php include('partials-front/menu.php') ?>
<!-- fOOD sEARCH Section Starts Here -->
<section class="food-search text-center">
    <div class="container">

        <form action="<?php echo SITEURL; ?>food-search.php" method="POST">
            <input type="search" style="width: 600px;border-radius:5px" name="search" placeholder="Search for Food.." required>
            <input type="submit" name="submit" value="Search" class="btn btn-primary">
        </form>
        <br />
        <br />
        <br />
        <center>
            <h5 style="color: crimson;">Search your favourite food And Enjoy your meal.</h5>
        </center>

    </div>
</section>
<!-- fOOD sEARCH Section Ends Here -->



<!-- fOOD MEnu Section Starts Here -->
<section class="food-menu">
    <div class="container">
        <h2 class="text-center">Food Menu</h2>
        <?php

        $sql = "SELECT * FROM tbl_food WHERE active='Yes'";
        $res = mysqli_query($conn, $sql);

        $count = mysqli_num_rows($res);
        if ($count > 0) {
            //foods available
            while ($row = mysqli_fetch_assoc($res)) {
                $id = $row['id'];
                $title = $row['title'];
                $description = $row['description'];
                $price = $row['price'];
                $image_name = $row['image_name'];
        ?>
                <div class="food-menu-box" >
                <!-- data-aos="fade-in" -->
                    <div class="food-menu-img">
                        <?php

                        if ($image_name == "") {
                            echo "Image Not available";
                        } else {
                        ?>
                            <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve" style="border-radius: 50%;width:120px;height: 120px;box-shadow: rgba(17, 12, 46, 0.5) 0px 48px 100px 0px;position:absolute;margin-top:-40px;margin-left :40px;">

                        <?php

                        }

                        ?>

                    </div>
                    <div class="food-menu-desc">
                        <h4><?php echo $title ?></h4>
                        <p class="food-price">Rs <?php echo $price ?></p>
                        <p class="food-detail">
                            <?php echo $description ?>
                        </p>
                        <br>
                        <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="order-button">Order Now</a>
                    </div>
                </div>



        <?php
            }
        } else {
            echo "<div class='error'>Foods Not available...</div>";
        }


        ?>



















        <div class="clearfix"></div>



    </div>

</section>
<!-- fOOD Menu Section Ends Here -->
<?php include('partials-front/footer.php') ?>

<!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> -->
<!-- <script> -->
    <!-- // AOS.init({ -->
        <!-- // offset: 120, // offset (in px) from the original trigger point -->
        <!-- // delay: 0, // values from 0 to 3000, with step 50ms -->
        <!-- // duration: 700, // values from 0 to 3000, with step 50ms -->
        <!-- // easing: 'ease', -->
    <!-- // }); -->
<!-- </script> -->