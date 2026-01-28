<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quanlybanhang"; 

// Kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}


$conn->set_charset("utf8");

// Thêm dữ liệu
$sql = "INSERT INTO San_Pham (ten_san_pham, mo_ta, gia_tien) 
        VALUES 
            ('iPhone 15', 'Điện thoại màu hồng, 128GB', 25000000),
            ('Samsung S24', 'Màu đen, AI Camera', 23000000);";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "Thêm thành công! Sản phẩm mới có mã ID là: " . $last_id;
} else {
    echo "Lỗi thêm dữ liệu: " . $conn->error;
}

$conn->close();
?>