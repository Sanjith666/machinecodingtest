<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "machine_coding_test";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}


?>
