<?php
// Khai báo thông tin máy chủ
$servername = "localhost";
$username = "root";
$password = ""; 

// Kết nối đến MySQL 
$conn = new mysqli($servername, $username, $password);

// Kiểm tra xem kết nối có lỗi không
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Viết lệnh tạo Database
$sql = "CREATE DATABASE quanlybanhang";

if ($conn->query($sql) === TRUE) {
    echo "Thành công! Đã tạo Database 'quanlybanhang'";
} else {
    echo "Lỗi khi tạo: " . $conn->error;
}

// Đóng kết nối
$conn->close();
?>