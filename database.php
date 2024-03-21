<?php

$hostname = "localhost:3307";
$dbUser = "root";
$dbPassword = "";
$dbName = "register";
$conn = mysqli_connect($hostname,$dbUser,$dbPassword,$dbName);
if(!$conn){
    die("something went wrong;");
}
?>