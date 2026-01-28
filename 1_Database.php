<?php
// 1. Khai báo thông tin máy chủ
$servername = "localhost";
$username = "root";
$password = ""; // XAMPP mặc định mật khẩu rỗng

// 2. Kết nối đến MySQL (Chưa có tên database ở đây)
$conn = new mysqli($servername, $username, $password);

// Kiểm tra xem kết nối có lỗi không
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// 3. Viết lệnh tạo Database tên là "quanly_banhang"
// Bạn có thể đổi tên "quanly_banhang" thành tên bạn thích
$sql = "CREATE DATABASE quanlybanhang";

if ($conn->query($sql) === TRUE) {
    echo "Thành công! Đã tạo Database 'quanlybanhang'";
} else {
    echo "Lỗi khi tạo: " . $conn->error;
}

// 4. Đóng kết nối
$conn->close();
?>