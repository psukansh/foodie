<?php include('partials-front/menu.php') ?>


<!-- Navbar Section Ends Here -->

<!-- fOOD sEARCH Section Starts Here -->
<?php
if (isset($_SESSION['order'])) {
    echo $_SESSION['order'];
    unset($_SESSION['order']);
}

if (isset($_SESSION['notify'])) {
    echo $_SESSION['notify'];
    unset($_SESSION['notify']);
}




?>
<br />
<br />

<div class="social-nav-content">
    <div class="social-nav-content-content">
        <ul>
            <li>
                <a href="https://www.instagram.com/sukansh_at__27/"><i class="fab fa-instagram"></i>Instagram</a>
            </li>
            <li>
                <a href=""><i class="fab fa-facebook"></i>Facebook</a>
            </li>
            <li>
                <a href=""><i class="fab fa-twitter"></i>Twitter</a>
            </li>
            <li>
                <a href="https://github.com/psukansh"><i class="fab fa-github"></i>Github</a>
            </li>
            <li>
                <a href=""><i class="fab fa-linkedin"></i>Linkedin</a>
            </li>
        </ul>
    </div>
</div>

<div class="home_page">
    <div class="content">
        <div class="homepage">
            <div class="content">
                <div class="info">
                    <h1 style="font-family: 'Bebas Neue', cursive; font-weight:bold;font-size:50px">Healthy <span style="color: red;font-family: 'Oswald', sans-serif;">Food</span>
                        to live Healthier life
                        in the future</h1>
                    <p>Enjoy a healthy life by eating healthy foods that
                        have extraordinary flavors that make your life
                        healthier for today and in the future</p>
                    <br />
                    <br />
                    <br />
                    <br />
                    <!-- <div class="home-social"> -->
                    <!-- <ul> -->
                    <!-- <li> -->
                    <!-- <a href="#"><i class="fab fa-instagram"></i></a> -->
                    <!-- </li> -->
                    <!-- <div class="line"></div> -->
                    <!-- <li> -->
                    <!-- <a href="#"><i class="fab fa-facebook"></i></a> -->
                    <!-- </li> -->
                    <!-- <div class="line"></div> -->
                    <!-- <li> -->
                    <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                    <!-- </li> -->
                    <!-- <div class="line"></div> -->
                    <!-- <li> -->
                    <!-- <a href="#"><i class="fab fa-github"></i></a> -->
                    <!-- </li> -->
                    <!-- <div class="line"></div> -->
                    <!-- <li> -->
                    <!-- <a href="#"><i class="fab fa-twitter"></i></a> -->
                    <!-- </li> -->
                    <!-- </ul> -->

                    <!-- </div> -->
                    <!-- <button type="submit" class="home-button">Order Now</button> -->
                </div>
                <div class="images">
                    <form action="<?php echo SITEURL; ?>food-search.php" method="POST" class="food-search-input">
                        <input type="search" class="food-search-input" name="search" placeholder="Search for Food.." required>
                        <input type="submit" name="submit" value="Search" class="btn btn-primary">
                    </form>
                    <h6 style="color: white;font-size:18px;margin:20px 0px">Search your favourite food</h6>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="about" style="width: 100%;">
    <div class="content" style="width: 100%;height:600px;display:flex;justify-content:center;align-items:center">
        <div class="info-one" style="width: 10%;margin-bottom:100px;">
            <h1 style="font-size: 50px;color:blueviolet;text-shadow: 2px 7px 5px rgba(0,0,0,0.3), 
    0px -4px 10px rgba(255,255,255,0.3);">INTRODUCING SPFfood</h1>
        </div>
        <br />
        <div class="image" style="width: 30%;margin-right:200px">
            <img src="images/about img.png" alt="" srcset="" height="500px">
        </div>
        <br>
        <div class="info-two" style="width: 30%;margin-top:100px;">
            <h1 style="font-size: 50px;color:blueviolet;text-shadow: 2px 7px 5px rgba(0,0,0,0.3), 
    0px -4px 10px rgba(255,255,255,0.3);">THE TOP ONE-STOP-SHOP FOR TIMELY FOOD DEVIVERIES.</h1>
        </div>
    </div>
    <p style="text-align:center;color:black;text-shadow: 2px 7px 5px rgba(0,0,0,0.3), 
    0px -4px 10px rgba(255,255,255,0.3);">Because food tastes best when it's on time!</p>
</div>
<br />
<br />
<br />
<br />
<br />
<br />
<section class="food-search">
    <div class="container">

        <form action="<?php echo SITEURL; ?>food-search.php" method="POST" class="food-search-input">
            <input type="search" class="food-search-input" name="search" placeholder="Search for Food.." required>
            <input type="submit" name="submit" value="Search" class="btn btn-primary">
        </form>
        <br />
        <br />
        <br />
        <h1 class="ml7">
            <span class="text-wrapper">
                <span class="letters" style="text-align: center;"> Order your favourite food and enjoy meal</span>
            </span>
        </h1>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

        <script>
            // Wrap every letter in a span
            var textWrapper = document.querySelector('.ml7 .letters');
            textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

            anime.timeline({
                    loop: true
                })
                .add({
                    targets: '.ml7 .letter',
                    translateY: ["1.1em", 0],
                    translateX: ["0.55em", 0],
                    translateZ: 0,
                    rotateZ: [180, 0],
                    duration: 750,
                    easing: "easeOutExpo",
                    delay: (el, i) => 50 * i
                }).add({
                    targets: '.ml7',
                    opacity: 0,
                    duration: 1000,
                    easing: "easeOutExpo",
                    delay: 1000
                });
            // 
        </script>




    </div>
</section>

<!-- fOOD sEARCH Section Ends Here -->

<!-- CAtegories Section Starts Here -->






<section class="categories" style="background-color: rgb(236, 236, 236);">
    <div class="header-main">
        <img src="images/icon.png" alt="" srcset="">
        <h2 class="text-center" style="margin: 10px;color:blueviolet" style="color: blueviolet;">Explore Foods</h2>
    </div>


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
    <h4 style="text-align:center;font-size:18px;color:blueviolet">Nothing brings people together like food</h4>
</section>

<!-- Categories Section Ends Here -->
<br />

<section class="food-banners">
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
        <div class="header-main">
            <img src="images/icon.png" alt="" srcset="">
            <h2 class="text-center" style="margin: 10px;color: blueviolet;">Food Menu</h2>
        </div>





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
                            <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>">

                        <?php

                        }
                        ?>

                    </div>
                    <div class="food-menu-desc">
                        <h4><?php echo $title ?></h4>
                        
                        <p class="food-detail">
                            <?php echo $description; ?>
                        </p>
                        
                        <p class="food-price">Rs. <?php echo $price; ?></p>
                        



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

<section class="popular-food">
    <br />
    <br />
    <h2 style="color: white;text-align:center">Popular Foods</h2>
    <br />
    <center>
        <p style="color:white">Eating healthy food fills your body with energy and nutrients,Imagine your cells smiling back at you and saying 'Thank you'</p>
    </center>
    <div class="content">
        <a href="<?php echo SITEURL; ?>category-foods.php?category_id=51">
            <div class="image-content" style="background-color: white;padding:8px;border-radius:4px;display:flex;width:300px;height:200px;cursor:pointer">
                <img src="images/pizza/paneer-pizza.jpg" alt="" width="200px" height="200px">
                <div class="info" style="margin-left:10px">
                    <h3>Burger</h3>
                    <p style="color: gray;margin-left:10px">Hello everyone this is sukansh pendor</p>
                </div>
            </div>
        </a>

        <a href="<?php echo SITEURL; ?>category-foods.php?category_id=57" style="margin: 20px;">
            <div class="image-content" style="background-color: white;padding:8px;border-radius:4px;display:flex;width:300px;height:200px;cursor:pointer">
                <img src="images/snacks.jpg" alt="" width="200px" height="200px">
                <div class="info" style="margin-left:10px">
                    <h3>Snacks</h3>
                    <p style="color: gray;margin-left:10px">Hello everyone this is sukansh pendor</p>
                </div>
            </div>
        </a>

        <a href="<?php echo SITEURL; ?>category-foods.php?category_id=51" style="margin: 20px;">
            <div class="image-content" style="background-color: white;padding:8px;border-radius:4px;display:flex;width:300px;height:200px;cursor:pointer">
                <img src="images/pizza/paneer-pizza.jpg" alt="" width="200px" height="200px">
                <div class="info" style="margin-left:10px">
                    <h3>Burger</h3>
                    <p style="color: gray;margin-left:10px">Hello everyone this is sukansh pendor</p>
                </div>
            </div>
        </a>

        <a href="<?php echo SITEURL; ?>category-foods.php?category_id=51">
            <div class="image-content" style="background-color: white;padding:8px;border-radius:4px;display:flex;width:300px;height:200px;cursor:pointer">
                <img src="images/pizza/paneer-pizza.jpg" alt="" width="200px" height="200px">
                <div class="info" style="margin-left:10px">
                    <h3>Burger</h3>
                    <p style="color: gray;margin-left:10px">Hello everyone this is sukansh pendor</p>
                </div>
            </div>
        </a>









    </div>
</section>

<br />
<br />
<br />
<br />

<!-- <div class="chefs" id="chefs"> -->
<!-- <div class="content"> -->
<!-- <div class="info"> -->
<!-- <h2>Cooked by the -->
<!-- Best chefs </h2> -->
<!-- <p>We present the best chefs to cook your food to make -->
<!-- the food taste extraordinary</p> -->
<!-- <div class="check-circle" style="display: flex;flex-wrap:wrap;width:700px"> -->
<!-- <ul> -->
<!-- <li><i class="far fa-check-square" style="color: white;margin:0px 5px"></i>A guarenteed delicious meal</li> -->
<!-- <li><i class="far fa-check-square" style="color: white;margin:0px 5px"></i>Food is guarenteed hygenic</li> -->
<!-- <li><i class="far fa-check-square" style="color: white;margin:0px 5px"></i>Cooked quickly</li> -->
<!-- <li><i class="far fa-check-square" style="color: white;margin:0px 5px"></i>Delivery on time</li> -->
<!-- </ul> -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!-- </div> -->
<!-- </div> -->
<!-- <div class="image"> -->
<!-- <img src="" alt="" srcset=""> -->
<!-- </div> -->
<!-- </div> -->
<!-- </div> -->
<!-- <br /> -->
<!-- <br /> -->
<!-- <br /> -->
<!-- <br /> -->
<!-- <br /> -->
<!-- <br /> -->
<!-- <br /> -->
<!-- <br /> -->


<div class="review-section" id="review">














    <form action="" method="POST" style="margin: 20px;" style=" background-image: linear-gradient(120deg,black,rgb(0, 17, 63));">



        <h2 style="color: white;">Add review <i class="fas fa-comments"></i> </h2>

        <div class="review-content">
            <div class="content" style="width:400px;padding:20px;color:black">

                <div class="review-content-content">
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

            </div>
            <!-- <img src="" alt="" srcset="" width="300px" height="300px" style="margin-left: 30px;"> -->
        </div>




    </form>
    <div class="para-review">
        <h5 style="font-family: 'Merienda', cursive;color:white">Count memories not calories. ...</h5>
    </div>




</div>

<br />
<br />
<br />
<br />
<br />
<br />

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
        $_SESSION['notify'] = "<div data-aos='slide-left' style='position:fixed;top:200px;right:200px;transition:0.3s;background-color:yellowgreen;border-radius:25px;color:white;padding:10px'>Review Added</div>";
        echo ("<script>location.href = '" . SITEURL . "index.php</script>");
    } else {
        $_SESSION['notify'] = "<div data-aos='fade-in' style='background-color:red;color:black;position:fixed;right:200px;top-300px;transition:0.3s'>Review not Added</div>";
        echo ("<script>location.href = '" . SITEURL . "index.php</script>");
    }
}


?>
<div class="content" style="display: flex;flex-direction:column;justify-content:center;align-items:center;flex-wrap:wrap;;padding:30px;">

    <h2 style="color: black;margin:10px">What our customers say</h2>
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
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />

                <div class="content-review-section">

                    <div class="review-section" id="review-section" style="padding:10px;float:left;margin:10px; " data-aos="fade-in">

                        <div class="image-name" style="display: flex;justify-content:left;align-items:left">
                            <i class="fas fa-user-circle" style="font-size:30px;color: white;"></i>
                            <div style="display: flex;flex-direction:column;width:80%">
                                <h3 style="padding: 0px 10px;font-size :17px;color:white"><?php echo $full_name ?></h3>

                            </div>



                        </div>
                        <div class="comment" style="margin:20px 0px;margin-left:50px;display:flex">

                            <p style="margin-left:50px;width: 250px;padding:10px;font-family:Arial, Helvetica, sans-serif;"><?php echo $comment ?>...</p>
                            <img src="./images/comments.png" alt="" width="80px" height="80px" style="transform: rotate(0deg);opacity:1;">

                        </div>
                        <p style="color: gray;font-size:10px;margin-left:20px"><?php echo $date_time; ?></p>
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
            <li><a href="">Kelapur</a></li>
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

<script src="js/index.js"></script>