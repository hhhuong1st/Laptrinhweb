<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quanlybanhang"; // Điền đúng tên Database bạn vừa tạo ở Bước 1

// 1. Tạo kết nối (Lần này có thêm biến $dbname)
$conn = new mysqli($servername, $username, $password, $dbname);

// 2. Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error); // Nếu lỗi thì dừng và hiện lỗi
}

// 3. Thiết lập font chữ tiếng Việt (Rất quan trọng để không bị lỗi font)
$conn->set_charset("utf8");

echo "Kết nối thành công vào Database: " . $dbname;

// Lưu ý: Ở file này chúng ta KHÔNG đóng kết nối ($conn->close()) ngay,
// vì file này thường được nhúng vào các trang khác để xử lý dữ liệu tiếp.
?>