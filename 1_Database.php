<?php
// 1. Khai báo thông tin máy chủ
$servername = "localhost";
$username = "root";
$password = ""; 

// 2. Kết nối đến MySQL 
$conn = new mysqli($servername, $username, $password);

// Kiểm tra xem kết nối có lỗi không
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// 3. Viết lệnh tạo Database
$sql = "CREATE DATABASE quanlybanhang";

if ($conn->query($sql) === TRUE) {
    echo "Thành công! Đã tạo Database 'quanlybanhang'";
} else {
    echo "Lỗi khi tạo: " . $conn->error;
}

// 4. Đóng kết nối
$conn->close();
?>