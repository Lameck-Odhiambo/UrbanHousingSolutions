<?php
if (isset($_POST["btn-reg"])){
    $location = $_POST['location'];
    $block = $_POST['block'];
    $size = $_POST['size'];
    $floor = $_POST['floor'];
    $houseNumber = $_POST['houseNumber'];
    $parking = $_POST['parking'];
}

//Connect to the database to start saving
require_once "db_connection.php";

$Insert_query = "INSERT INTO `properties`(`id`, `location`, `block`, `size`, `floor`, `houseNumber`, `parking`)
 VALUES (null,'$location','$block','$size','$floor','$houseNumber','$parking')";

//Saving data using mysqli_query
$Save = mysqli_query($connection,$Insert_query);

//Checking if the saving was successful
if (isset($Save)){
    header("location:landing.php");
}else{
    echo "Application unsuccessful";
}
