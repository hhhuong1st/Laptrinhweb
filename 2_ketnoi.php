<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quanlybanhang"; 

// 1. Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// 2. Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error); 
}

$conn->set_charset("utf8");

echo "Kết nối thành công vào Database: " . $dbname;
?>