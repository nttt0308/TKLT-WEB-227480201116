<?php
include 'Connection.php';

$mahd = $_POST['mahd'];
$makh = $_POST['makh'];
$ngayban = $_POST['ngayban'];
$tongtien = $_POST['tongtien'];

$sql = "INSERT INTO hoadon VALUES ('$mahd', '$makh', '$ngayban', '$tongtien')";

if ($conn->query($sql) === TRUE) {
    echo "Thêm hóa đơn thành công!";
} else {
    echo "Lỗi: " . $conn->error;
}
$conn->close();
?>
