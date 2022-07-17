<?php include('partials-front/menu.php') ?>
<!-- fOOD sEARCH Section Starts Here -->
<section class="food-search text-center">
    <div class="container">

        <form action="<?php echo SITEURL; ?>food-search.php" method="POST" class="food-search-input">
            <input type="search" style="width: 600px;border-radius:5px" name="search" placeholder="Search for Food.." required>
            <input type="submit" name="submit" value="Search" class="btn btn-primary">
        </form>
        <br />
        <br />
        <br />
        <h1 class="ml10">
            <span class="text-wrapper">
                <span class="letters">Order your favourite food and enjoy meal</span>
            </span>
        </h1>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <script>
            // Wrap every letter in a span
            var textWrapper = document.querySelector('.ml10 .letters');
            textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

            anime.timeline({
                    loop: true
                })
                .add({
                    targets: '.ml10 .letter',
                    rotateY: [-90, 0],
                    duration: 1300,
                    delay: (el, i) => 45 * i
                }).add({
                    targets: '.ml10',
                    opacity: 0,
                    duration: 1000,
                    easing: "easeOutExpo",
                    delay: 1000
                });
        </script>

    </div>
</section>

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
                <div class="food-menu-box" data-aos="fade-in">
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

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 80, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 300, // values from 0 to 3000, with step 50ms
        easing: 'ease',
    });
</script>