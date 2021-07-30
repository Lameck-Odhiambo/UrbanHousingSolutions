<?php
//Checking if register button has been clicked
if (isset($_POST["btn_reg"])){
    $fullName = $_POST["fullName"];
    $phoneNumber = $_POST["phoneNumber"];
    $email = $_POST["email"];
    $id = $_POST["ID"];
    $hudumaNumber = $_POST["hudumaNumber"];
    $KRApin = $_POST["KRApin"];
    $address = $_POST["address"];
    $familyMembers = $_POST["familyMembers"];
    $employmentStatus = $_POST["employmentStatus"];
    $salary = $_POST["salary"];
    $NHIF = $_POST["NHIF"];
    $NSSF = $_POST["NSSF"];
    $disability = $_POST["disability"];
    $terms = $_POST["terms"];
    $password = $_POST["password"];

}

//Connect to the database to start saving
require_once "db_connection.php";

//Preparing the insert query to start saving
$Insert_query = "INSERT INTO `register`(`client id`, `Full name`, `ID`, `Physical Address`, 
                       `Salary`, `Phone No`, `Huduma No`, `No of members`, `NHIF`, `Disability`, `Email`, 
                       `KRA pin`, `Employment Status`, `NSSF`)VALUES (null ,'$fullName','$id',
                          '$address','$salary','$phoneNumber','$hudumaNumber','$familyMembers','$NHIF','$disability',
                            '$email','$KRApin','$employmentStatus','$NSSF')";
//Saving data using mysqli_query
$Save = mysqli_query($connection,$Insert_query);

//Checking if the saving was successful
if (isset($Save)){
    header("location:register.php");
}else{
    echo "Saving unsuccessful";
}
