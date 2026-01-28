<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quanly_banhang";

// Kết nối
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
$conn->set_charset("utf8");

// Viết câu lệnh SQL Cập nhật
// Cập nhật bảng San_Pham, ĐẶT giá tiền = 20000000 TẠI dòng có id = 1"
$sql = "UPDATE San_Pham SET gia_tien=20000000 WHERE id=1";

// Có thể sửa nhiều cột cùng lúc (Ví dụ vừa sửa tên, vừa sửa giá):
// $sql = "UPDATE San_Pham SET ten_san_pham='iPhone 15 Pro', gia_tien=30000000 WHERE id=1";


if ($conn->query($sql) === TRUE) {
    echo "Cập nhật thành công!";
} else {
    echo "Lỗi khi cập nhật: " . $conn->error;
}

$conn->close();
?>