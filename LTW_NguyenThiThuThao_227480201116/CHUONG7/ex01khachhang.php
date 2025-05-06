<?php
include 'Connection.php';

$makh = $_POST['makh'];
$tenkh = $_POST['tenkh'];
$diachi = $_POST['diachi'];
$sdt = $_POST['sdt'];

$sql = "UPDATE khachhang SET tenkh='$tenkh', diachi='$diachi', sdt='$sdt' WHERE makh='$makh'";

if ($conn->query($sql) === TRUE) {
    echo "Cập nhật thành công!";
} else {
    echo "Lỗi: " . $conn->error;
}
$conn->close();
?>
