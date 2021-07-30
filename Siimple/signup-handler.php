<?php
if (isset($_POST["btn-reg"])) {
    $fullName = $_POST["name"];
    $phoneNumber = $_POST["phone"];
    $email = $_POST["email"];
    $id = $_POST["ID"];
    $KRApin = $_POST["KRApin"];
    $address = $_POST["address"];
    $familyMembers = $_POST["familyMembers"];
    $disability = $_POST["disabilityStatus"];
    $employmentStatus = $_POST["employmentStatus"];
    $income = $_POST["income"];
    $preferredLocation = $_POST["preferredLocation"];
    $preferredSize = $_POST["preferredSize"];
    $password = $_POST["password"];
}

//Connect to the database to start saving
require_once "db_connection.php";
//Preparing the insert query to start saving

$Insert_query = "INSERT INTO `users`(`ClientID`, `fullName`, `email`, `phoneNumber`, `ID`, `KRApin`, `address`, 
                    `familyMembers`, `disabilityStatus`, `employmentStatus`, `income`, `preferredLocation`, 
                    `preferredSize`, `password`) VALUES (null ,'$fullName','$email','$phoneNumber',
                    '$id','$KRApin','$address','$familyMembers','$employmentStatus','$income','$preferredLocation',
                    '$preferredSize','$password')";

//Saving data using mysqli_query
$Save = mysqli_query($connection,$Insert_query);

//Checking if the saving was successful
if (isset($Save)){
    header("location:landing.php");
}else{
    echo "Application unsuccessful";
}