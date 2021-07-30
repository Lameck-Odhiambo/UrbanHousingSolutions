<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "register_trial";

$connection = mysqli_connect($host, $username, $password, $database);

//If connection to the db is denied, stop the process
if (!isset($connection)) {
    die("Connection to the db failed");
}
