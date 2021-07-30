<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'register_trial');

$name = $_POST['name'];
$password = $_POST['password'];

$s = "SELECT * FROM `user` WHERE name= '$name'&& password ='$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1){
    $_SESSION['username'] = $name;
    header('location:landing.php');
}else{
    header('location:landing.php');
    echo "Password or Email is incorrect";
}