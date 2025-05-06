<?php
include 'Connection.php';

$mahd = $_GET['mahd'];

$sql = "SELECT * FROM hoadon WHERE mahd LIKE '%$mahd%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Mã hóa đơn: " . $row["mahd"] . " - Mã khách: " . $row["makh"] . 
             " - Ngày bán: " . $row["ngayban"] . " - Tổng tiền: " . $row["tongtien"] . "<br>";
    }
} else {
    echo "Không tìm thấy hóa đơn.";
}
$conn->close();
?>
