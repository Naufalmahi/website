<?php
// server
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "db_test_rpl_2";

//connection
$conn = mysqli_connect($servername,$username,$password,$database_name);

if(!$conn){
    die("connection failed" . mysqli_connect_error());
}
?>