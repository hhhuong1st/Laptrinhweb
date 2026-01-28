<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quanlybanhang"; // Nhớ phải chọn đúng Database đã tạo

// 1. Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// 2. Câu lệnh SQL để tạo bảng tên là "San_Pham"
// Dưới đây là định nghĩa các cột (ngăn chứa)
$sql = "CREATE TABLE San_Pham (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    ten_san_pham VARCHAR(50) NOT NULL,
    mo_ta TEXT,
    gia_tien INT(10) NOT NULL,
    ngay_tao TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

// 3. Thực thi câu lệnh
if ($conn->query($sql) === TRUE) {
    echo "Thành công! Đã tạo bảng 'San_Pham'";
} else {
    echo "Lỗi tạo bảng: " . $conn->error;
}

$conn->close();
?>