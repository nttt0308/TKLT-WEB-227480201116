<?php
$servername = "localhost";
$servername = "root";
$password = "03082004";
$dbname = "quanlybanhang";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Kết nối thất bại: ".$conn->connect_error);
}
?>