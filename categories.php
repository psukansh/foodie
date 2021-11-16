<?php include('partials-front/menu.php') ?>


<!-- CAtegories Section Starts Here -->
<br/>
<br/>
<br/>
<section class="categories">
    <div class="container">
        <h2 class="text-center" style="color: blueviolet;">Explore Foods</h2>

        <?php

        //display all the categories

        $sql = "SELECT * from tbl_category WHERE active='Yes'";

        $res = mysqli_query($conn, $sql);

        $count = mysqli_num_rows($res);

        if ($count > 0) {

            while ($row = mysqli_fetch_assoc($res)) {
                $id = $row['id'];
                $title = $row['title'];
                $image_name = $row['image_name'];
        ?>
                <div class="category-content" style="display:flex;float:left;margin:20px">
                    <a href="<?php echo SITEURL; ?>category-foods.php?category_id=<?php echo $id; ?>">
                        <div style="display:flex;justify-content:center;align-items:center;flex-direction:column;box-shadow: rgba(17, 12, 46, 0.25) 0px 48px 100px 0px;">
                            <?php
                            if ($image_name == "") {

                                echo "<div class='error'>Image Not Found...</div>";
                            } else {
                            ?>
                                <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="Pizza" width="200px" height="200px">

                            <?php

                            }
                            ?>

                            <h3 style="margin: 10px;"><?php echo $title; ?></h3>
                        </div>
                    </a>
                </div>


        <?php
            }
        } else {

            echo "<div class='error'>Categories Not Found...</div>";
        }


        ?>











        <div class="clearfix"></div>

    </div>
    <br />
    <br />
    <br />
    <br />
    <br />
</section>
<br/>
<br/>
<br/>

<!-- <div class="info" style="width: 100%;height:300px"> -->
<!-- <div class="content"> -->
<!-- <h4 style="text-align: center;" >Nothing brings people together like food...</h4> -->
<!-- </div> -->
<!-- </div> -->
<!-- Categories Section Ends Here -->




<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<?php include('partials-front/footer.php') ?>