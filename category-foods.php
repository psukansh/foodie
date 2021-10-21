<?php include('partials-front/menu.php') ?>


<?php

if (isset($_GET['category_id'])) {
    $category_id = $_GET['category_id'];
    $sql = "SELECT title FROM tbl_category WHERE id=$category_id";

    $res = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($res);

    $category_title = $row['title'];
} else {
    header('location:' . SITEURL);
}


?>


<!-- fOOD sEARCH Section Starts Here -->
<section class="food-search text-center">
    <div class="container">

        <h2 style="color: white;font-size:30px">We found below items for <a href="#" style="color: rgb(0, 255, 149);font-size:40px">"<?php echo $category_title; ?>"</a></h2>

    </div>
</section>
<!-- fOOD sEARCH Section Ends Here -->



<!-- fOOD MEnu Section Starts Here -->
<section class="food-menu">
    <div class="container">
        <h2 class="text-center">Food Menu</h2>


        <?php

        $sql2 = "SELECT * FROM tbl_food WHERE category_id=$category_id";

        $res2 = mysqli_query($conn, $sql2);

        $count2 = mysqli_num_rows($res2);

        if ($count2 > 0) {
            while ($row2 = mysqli_fetch_assoc($res2)) {
                $id=$row2['id'];
                $title = $row2['title'];
                $price = $row2['price'];
                $description = $row2['description'];
                $image_name = $row2['image_name'];
        ?>
                <div class="food-menu-box">
                    <div class="food-menu-img">
                        <?php

                        if ($image_name == "") {
                            echo "Image Not Available";
                        } else {
                        ?>
                            <img src="<?php echo SITEURL ?>images/food/<?php echo $image_name ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve" style="border-radius: 50%;width:120px;height: 120px;box-shadow: rgba(17, 12, 46, 0.5) 0px 48px 100px 0px;position:absolute;margin-top:-40px;margin-left :40px;">



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
            ?>
            <center><img src="error1.png" alt="" srcset="" width="400px" height="400px"></center> 
             <?php
             echo "<center><h1 style='color:red'>Food Not Available...</h1></center>";
        }


        ?>


        <div class="clearfix"></div>



    </div>

</section>
<!-- fOOD Menu Section Ends Here -->
<?php include('partials-front/footer.php') ?>