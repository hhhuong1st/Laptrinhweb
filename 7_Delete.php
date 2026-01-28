<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quanlybanhang";

// Kết nối
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Câu lệnh SQL Xóa
// Xóa TỪ bảng San_Pham TẠI NƠI MÀ id bằng 1
$sql = "DELETE FROM San_Pham WHERE id=2";


if ($conn->query($sql) === TRUE) {
    echo "Đã xóa thành công sản phẩm";
} else {
    echo "Lỗi khi xóa: " . $conn->error;
}

$conn->close();
?>