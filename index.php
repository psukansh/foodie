<?php include('partials-front/menu.php') ?>


<!-- Navbar Section Ends Here -->

<!-- fOOD sEARCH Section Starts Here -->
<?php
if (isset($_SESSION['order'])) {
    echo $_SESSION['order'];
    unset($_SESSION['order']);
}




?>
<br />
<br />

<div class="home_page">
    <div class="content">
        <div class="homepage">
            <div class="content">
                <div class="info">
                    <h1 style="font-family: 'NUnito', sans-serif;font-weight:bold;font-size:40px">Healthy <span style="color: whitesmoke;font-family: 'NUnito', sans-serif;">Food</span>
                        to live Healthier life
                        in the future</h1>
                    <p>Enjoy a healthy life by eating healthy foods that
                        have extraordinary flavors that make your life
                        healthier for today and in the future</p>
                    <br />
                    <br />
                    <br />
                    <br />
                    <div class="home-social">
                        <ul>
                            <li>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                            <div class="line"></div>
                            <li>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                            </li>
                            <div class="line"></div>
                            <li>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </li>
                            <div class="line"></div>
                            <li>
                                <a href="#"><i class="fab fa-github"></i></a>
                            </li>
                            <div class="line"></div>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                        </ul>

                    </div>
                    <!-- <button type="submit" class="home-button">Order Now</button> -->
                </div>
                <div class="images">
                    <img src="./images/about real.png">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="about" style="width: 100%;height:100vh;">
    <div class="content" style="width: 100%;height:600px;display:flex;justify-content:center;align-items:center">
        <div class="info-one" style="width: 10%;margin-bottom:100px;">
            <h1 style="font-size: 50px;">Introducing SPFfood</h1>
        </div>
        <br />
        <div class="image" style="width: 30%;margin-right:200px">
            <img src="images/about img.png" alt="" srcset="" height="500px">
        </div>
        <br>
        <div class="info-two" style="width: 30%;margin-top:100px;">
            <h1 style="font-size: 50px;">the one-stop-shop for timely food deliveries.</h1>
        </div>
    </div>
    <p style="text-align:center;color:black">Because food tastes best when it's on time!</p>
</div>
<!-- <br /> -->
<!-- <br /> -->
<!-- <br /> -->
<!-- <br /> -->
<!-- <br /> -->
<!-- <br /> -->
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
            <h5 style="color: white;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;font-size:40px;font-weight:bold">Search your favourite food <br /> And Enjoy your meal.</h5>
        </center>




    </div>
</section>

<!-- fOOD sEARCH Section Ends Here -->

<!-- CAtegories Section Starts Here -->






<br />
<section class="categories">
    <h2 class="text-center">Explore Foods</h2>

    <div class="container" style="border-radius:10px;display:flex;flex-wrap:wrap;">



        <?php

        //create sql query to display categories
        $sql = "SELECT * from tbl_category WHERE active='Yes' AND featured='Yes' ";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);

        if ($count > 0) {
            //categoris available
            while ($row = mysqli_fetch_assoc($res)) {
                $id = $row['id'];
                $title = $row['title'];
                $image_name = $row['image_name'];

        ?>
                <a href="<?php echo SITEURL; ?>category-foods.php?category_id=<?php echo $id; ?>">
                    <div class="box-3 ">
                        <?php if ($image_name == "") {
                            echo "<div class='error'>Image Not available</div>";
                        } else {
                        ?>
                            <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="Pizza" class="img-responsive img-curve" width="50px" height="50px">

                        <?php
                        }
                        ?>


                        <h3 style="margin-left:30px"><?php echo $title; ?></h3>
                    </div>
                </a>





        <?php
            }
        } else {

            echo "<div class='error'>Categories Not Addes yet</div>";
        }

        ?>









        <div class="clearfix"></div>
    </div>
    <br />
    <br />
    <br />
    <br />
    <h4 style="text-align:center;">Nothing brings people together like food</h4>
</section>

<!-- Categories Section Ends Here -->
<br />

<section class="food-banners" style="display: flex;">
    <!-- <div class="content" style="width: 100%;height:500px;display:flex;justify-content:center;align-items:center"> -->
    <!-- <img src="images/snacks.jpg" alt="" srcset="" width="1000px" height="500px"> -->
    <!-- </div> -->

    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">

            <img src="./images/banners/Purple App Phone Mockup Sales Marketing Presentation.jpg" style="width:1100px;height: 500px;">
            <!-- <div class="text" style="background-color: black;padding:20px;color:white;font-size:20px;width:300px;display:flex;align-items:center;justify-content:center">Chiken Biryani</div> -->
        </div>

        <div class="mySlides fade">

            <img src="images/banners/chicken.jpg" style="width:1100px;height: 500px;">
            <!-- <div class="text" style="background-color: black;padding:20px;color:white;font-size:20px;width:300px;display:flex;align-items:center;justify-content:center">Palak Paneer</div> -->
        </div>

        <div class="mySlides fade">

            <img src="images/banners/paneer.jpg" style="width:1100px;height: 500px;">
            <!-- <div class="text" style="background-color: black;padding:20px;color:white;font-size:20px;width:300px;display:flex;align-items:center;justify-content:center">Veg Burger</div> -->
        </div>

        <!-- Next and previous buttons -->
        <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a> -->
        <!-- <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <div class="poster">
        <div class="content" style="width: 300px;height:500px;background-color:blueviolet;">
            <img src="https://i.pinimg.com/originals/fe/63/e3/fe63e377284b1acc76f8db2b8eb8501b.jpg" alt="" srcset="" style="width: 300px;height:500px">
        </div>
    </div>


</section>

<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 5000); // Change image every 2 seconds
    }
</script>




<!-- fOOD MEnu Section Starts Here -->
<section class="food-menu">
    <div class="container">
        <h2 class="text-center">Food Menu</h2>





        <br />
        <br />

        <?php

        $sql2 = "SELECT * from tbl_food   LIMIT 6";
        $res2 = mysqli_query($conn, $sql2);

        $count2 = mysqli_num_rows($res2);
        if ($count > 0) {
            while ($row = mysqli_fetch_assoc($res2)) {
                $id = $row['id'];
                $title = $row['title'];
                $price = $row['price'];
                $description = $row['description'];
                $image_name = $row['image_name'];
        ?>

                <div class="food-menu-box" style="display: flex;">
                    <!-- //data-aos="fade-in" -->
                    <div class="food-menu-img">
                        <?php
                        if ($image_name == "") {
                            echo "<div class='error'>Image Not Available</div>";
                        } else {
                        ?>
                            <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" class="img-responsive img-curve" style="border-radius: 50%;width:120px;height: 120px;box-shadow: rgba(17, 12, 46, 0.5) 0px 48px 100px 0px;position:absolute;margin-top:-40px;margin-left :40px;">

                        <?php

                        }
                        ?>

                    </div>
                    <div class="food-menu-desc">
                        <h4><?php echo $title ?></h4>
                        <br />
                        <p class="food-price">Rs. <?php echo $price; ?></p>
                        <br />
                        <p class="food-detail">
                            <?php echo $description; ?>
                        </p>
                        <br />



                        <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="order-button"> Order Now</a>
                    </div>
                </div>


        <?php
            }
        } else {
            echo "<div class='error'>Food Not Available</div>";
        }

        ?>



















        <div class="clearfix"></div>



    </div>

    <p class="text-center">
        <a href="<?php echo SITEURL; ?>foods.php">See All Foods</a>
    </p>
</section>


<div class="chefs" id="chefs">
    <div class="content">
        <div class="info">
            <h2>Cooked by the
                Best chefs in the
                World</h2>
            <p>We present the best chefs to cook your food to make
                the food taste extraordinary</p>
            <div class="check-circle" style="display: flex;flex-wrap:wrap;width:700px">
                <p>A guarenteed delicious meal</p>
                <p>Food is guarenteed hygenic</p>
                <p>Cooked quickly</p>
                <p>Delivery on time</p>
            </div>
        </div>
        <div class="image">
            <img src="./images/chef.png" alt="" srcset="" style="background-color: white;">
        </div>
    </div>
</div>

<!-- <br /> -->
<!-- <br /> -->
<!-- <br /> -->
<!-- <br /> -->
<br />
<br />
<br />
<br />
<br />

<div class="review-section" id="review">
    <h1 style="color: black;text-align:center">Reviews </h1>












    <br />
    <br />
    <br />



    <form action="" method="POST" style="margin: 20px;">

        <h2 style="color: black;">Add review <i class="fas fa-comments"></i> </h2>

        <div class="review-content">
            <div class="content" style="width:400px;padding:20px;color:black">
                <div class="name" style="margin: 10px 0px;">
                    <h4>Full name</h4>
                    <input type="text" name="full_name" placeholder="Enter full name" value="" style="width: 350px;height:40px" value="" required><?php $name; ?>
                </div>

                <div class="name" style="margin: 10px 0px;">
                    <h4>Email</h4>
                    <input type="email" name="email" placeholder="Email" value="" style="width: 350px;height:40px" required>
                </div>


                <div class="comment" style="margin: 10px 0px;">
                    <h4>Comment</h4>
                    <textarea type="text" name="comment" id="" cols="52" rows="5" value="" required></textarea>
                </div>
                <button type="submit" name="submit" style="margin: 10px 0px;background-color: orange;padding:10px;color:white;border:none;outline:none;cursor:pointer">Add review</button>

            </div>
            <!-- <img src="" alt="" srcset="" width="300px" height="300px" style="margin-left: 30px;"> -->
        </div>
    </form>




</div>

<?php

if (isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $comment = $_POST['comment'];
    $email = $_POST['email'];
    $date_time = date('Y-m-d');

    $sql5 = "INSERT INTO tbl_reviews SET
    full_name='$full_name',
    comment='$comment',
    email='$email' ,
    date_time='$date_time' ";

    $res5 = mysqli_query($conn, $sql5);

    if ($res5 == true) {
        ///added to database 
        //but its commented now
        echo " Added to database";
        echo ("<script>location.href = '" . SITEURL . "index.php?msg=review';</script>");
    } else {
        echo "failed to added to database";
        echo ("<script>location.href = '" . SITEURL . "index.php?msg=review';</script>");
    }
}


?>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="content" style="display: flex;flex-direction:column;justify-content:center;align-items:center;flex-wrap:wrap;">

    <h2 style="color: black;">What our customers say <img src="images/chat.png" alt="" srcset="" width="40px" height="40px"> </h2>
    <div class="content-content" style="display: flex;flex-wrap:wrap;padding:20px;justify-content:center;align-items:center">
        <?php

        $sql6 = "SELECT * FROM tbl_reviews  ORDER BY id DESC ";
        $res6 = mysqli_query($conn, $sql6);

        $count = mysqli_num_rows($res6);

        if ($count > 0) {
            while ($row6 = mysqli_fetch_assoc($res6)) {
                $id = $row6['id'];
                $full_name = $row6['full_name'];
                $comment = $row6['comment'];
                $email = $row6['email'];
                $date_time = $row6['date_time'];

        ?>

                <br />
                <br />
                <br />

                <div class="content-review-section">

                    <div class="review-section" class="hvr-grow" style="background-color:white;width: 400px;padding:10px;border-top-right-radius: 0px;border-top-left-radius: 26px;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;box-shadow: rgba(139, 134, 134, 0.377) 0px 8px 24px;float:left;margin:10px;" data-aos="fade-in">

                        <div class="image-name" style="display: flex;justify-content:left;align-items:left">
                            <img src="./images/chef.png" alt="" width="40px" height="40px" style="background-color: black;border-radius:50%">
                            <div style="display: flex;flex-direction:column">
                                <h3 style="padding: 0px 10px;font-family: 'Festive', cursive;font-size :30px;"><?php echo $full_name ?></h3>
                                <p style="color: gray;font-size:10px;margin-left:20px"><?php echo $date_time; ?></p>
                            </div>


                        </div>
                        <div class="comment" style="margin:20px 0px;margin-left:50px">
                            <p style="width: 250px;padding:10px;font-family:Arial, Helvetica, sans-serif"><?php echo $comment ?>...</p>
                        </div>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "<div style='color:red'>Reviews Not Added Yet</div>";
        }

        ?>


















    </div>

</div>
</div>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />

<div class="server-center">
    <p style="padding: 20px;">Our services availables in..</p>
    <div class="content">
        <div class="list">
            <li><a href="">Arni</a></li>
            <li><a href="">Babhulgaon</a></li>
            <li><a href="">Darwha</a></li>
            <li><a href="">Umarkhed</a></li>
            <li><a href="">Arni</a></li>
            <li><a href="">Babhulgaon</a></li>
            <li><a href="">Darwha</a></li>
            <li><a href="">Umarkhed</a></li>

        </div>

        <div class="list">
            <li><a href="">Digras</a></li>
            <li><a href="">Ghatanji</a></li>
            <li><a href="">Kalamb</a></li>
            <li><a href="">Wani</a></li>
            <li><a href="">Arni</a></li>
            <li><a href="">Babhulgaon</a></li>
            <li><a href="">Darwha</a></li>
            <li><a href="">Umarkhed</a></li>
        </div>

        <div class="list">
            <li><a href="">Mahagaon</a></li>
            <li><a href="">Maregaon</a></li>
            <li><a href="">Ner, Yavatmal</a></li>
            <li><a href="">Yavatmal</a></li>
            <li><a href="">Arni</a></li>
            <li><a href="">Babhulgaon</a></li>
            <li><a href="">Darwha</a></li>
            <li><a href="">Umarkhed</a></li>
        </div>

        <div class="list">
            <li><a href="">Pandharkawada (Kelapur)</a></li>
            <li><a href="">Pusad</a></li>
            <li><a href="">Ralegaon</a></li>
            <li><a href="">Zari Jamani</a></li>
            <li><a href="">Arni</a></li>
            <li><a href="">Babhulgaon</a></li>
            <li><a href="">Darwha</a></li>
            <li><a href="">Umarkhed</a></li>
        </div>

        <div class="list">
            <li><a href="">Arni</a></li>
            <li><a href="">Babhulgaon</a></li>
            <li><a href="">Darwha</a></li>
            <li><a href="">Umarkhed</a></li>
            <li><a href="">Arni</a></li>
            <li><a href="">Babhulgaon</a></li>
            <li><a href="">Darwha</a></li>
            <li><a href="">Umarkhed</a></li>
        </div>

        <div class="list">
            <li><a href="">Digras</a></li>
            <li><a href="">Ghatanji</a></li>
            <li><a href="">Kalamb</a></li>
            <li><a href="">Wani</a></li>
            <li><a href="">Arni</a></li>
            <li><a href="">Babhulgaon</a></li>
            <li><a href="">Darwha</a></li>
            <li><a href="">Umarkhed</a></li>
        </div>











    </div>
</div>




<?php include('partials-front/footer.php') ?>
<!-- fOOD Menu Section Ends Here -->

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 200, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 700, // values from 0 to 3000, with step 50ms
        easing: 'ease',
    });
</script>