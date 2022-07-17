<?php

//start the session

session_start();




//execute query and save data into database
define('SITEURL','http://localhost:80/sukanshfood/');
define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','sukanshfood');


$conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error($conn));
$db_select=mysqli_select_db($conn,DB_NAME) or die (mysqli_error($conn));

?>