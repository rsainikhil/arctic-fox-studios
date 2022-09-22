<?php 

$server = "localhost";
$user = "root";
$password = "NO";
$database = "login_register";

$conn = mysqli_connect($server, $user, $password, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>