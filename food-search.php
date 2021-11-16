<?php include('partials-front/menu.php') ?>

<!-- fOOD sEARCH Section Starts Here -->
<section class="food-search text-center">
    <div class="container">

        <?php

        $search = $_POST['search'];





        ?>

        <h2 style="color: white;">Hey.... here's your search for <a href="#" style="color: rgb(0, 255, 149);"> " <?php echo $search; ?> "</a></h2>

    </div>
</section>
<!-- fOOD sEARCH Section Ends Here -->

<!-- <section class="filter"> -->
    <!-- <div class="content"> -->
        <!-- <button type="submit">filter</button> -->
        <!-- <select name=" offers" value="offers"> -->
            <!-- <option value="weekend">weekend</option> -->
            <!-- <option value="Ipl offers">Ipl offer</option> -->
            <!-- <option value="Dinner">Dinner</option> -->
        <!-- </select> -->
<!--  -->
        <!-- <select name=" prices" value="prices"> -->
            <!-- <option value="lower">lower</option> -->
            <!-- <option value="higher">higher</option> -->
<!--  -->
        <!-- </select> -->
    <!-- </div> -->
<!-- </section> -->


<!-- fOOD MEnu Section Starts Here -->
<section class="food-menu">
    <div class="container">
        <!-- <h2 class="text-center">Food Menu</h2> -->
        <?php


        $sql = "SELECT * FROM tbl_food WHERE  title LIKE '%$search%' OR description LIKE '%$search%' OR price LIKE '%$search%'";

        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);

        if ($count > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $id = $row['id'];
                $title = $row['title'];
                $price = $row['price'];
                $description = $row['description'];
                $image_name = $row['image_name'];
        ?>
                <div class="food-menu-box">
                    <div class="food-menu-img">
                        <?php

                        if ($image_name == "") {
                            echo "Image Not Available";
                        } else {
                        ?>
                            <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve" style="border-radius: 50%;width:120px;height: 120px;box-shadow: rgba(17, 12, 46, 0.5) 0px 48px 100px 0px;position:absolute;margin-top:-40px;margin-left :40px;">

                        <?php

                        }

                        ?>


                    </div>
                    <div class="food-menu-desc">
                        <h4><?php echo $title; ?></h4>
                        <p class="food-price">Rs <?php echo $price; ?></p>
                        <p class="food-detail">
                            <?php echo $description; ?>
                        </p>
                        <br>
                        <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="order-button">Order Now</a>
                    </div>
                </div>


            <?php

            }
        } else {

            ?>
            <center><img src="images/404 Error.gif" alt="" srcset="" width="400px" height="400px"></center>

        <?php

            echo "<center><h1 style='color:red'>Food Not Found...</h1></center>";
        }

        ?>



        <div class="clearfix"></div>



    </div>

    <br/>
    <br/>
    <br/>
    <br/>
    <br/>

</section>
<!-- fOOD Menu Section Ends Here -->
<?php include('partials-front/footer.php') ?>