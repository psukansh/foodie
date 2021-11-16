<?php include('config/constants.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Festive&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@900&family=Rubik:wght@900&display=swap" rel="stylesheet">
    <link rel="icon" href="images/spf logo.jpg" >
    <head>
</head>

    <title>SukanshFood</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container" style="display: flex;">
            <div class="logo">
                <a href="<?php echo SITEURL; ?>" title="Logo" style="display: flex;justify-content:center;align-items:center">
                    <!-- <img src="images/spf logo.jpg" alt="Restaurant Logo" class="img-responsive" width="40px" height="40px"> -->
                    <h3 style="font-size: 25px;margin-left:10px">SPFfood</h3>
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>"><i class="fas fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>categories.php"><i class="fas fa-sort"></i>Categories</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>foods.php"><i class="fas fa-cloud-meatball"></i>Foods</a>
                    </li>
                    <!-- <li> -->
                        <!-- <a href="<?php echo SITEURL; ?>login.php"><i class="fas fa-id-card"></i>login</a> -->
                    <!-- </li> -->
                    <li>
                        <a href="<?php echo SITEURL; ?>contact.php"><i class="fas fa-id-card"></i>Contact</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>