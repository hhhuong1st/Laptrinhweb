<?php
$servername = "localhost";
$username = "root";
$password = ""; 

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
// Tạo Database
$sql = "CREATE DATABASE quanlybanhang";

if ($conn->query($sql) === TRUE) {
    echo "Thành công! Đã tạo Database 'quanlybanhang'";
} else {
    echo "Lỗi khi tạo: " . $conn->error;
}

// Đóng kết nối
$conn->close();
?>