<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quanlybanhang";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

$sql = "SELECT id, ten_san_pham, gia_tien, ngay_tao FROM San_Pham";
$result = $conn->query($sql);


echo "<table border='1' cellpadding='10' style='border-collapse: collapse; width: 50%;'>";
echo "<tr style='background-color: #f2f2f2;'> 
        <th>Mã ID</th> 
        <th>Tên Sản Phẩm</th> 
        <th>Giá Tiền</th> 
        <th>Ngày Nhập</th> 
      </tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["ten_san_pham"] . "</td>";
        echo "<td>" . number_format($row["gia_tien"]) . " đ</td>"; // number_format để thêm dấu phẩy ngăn cách tiền
        echo "<td>" . $row["ngay_tao"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>Không có dữ liệu</td></tr>";
}
echo "</table>";

$conn->close();
?>