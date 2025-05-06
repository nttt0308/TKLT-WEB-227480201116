<?php
include 'Connection.php';

$makh = $_POST['makh'];

$sql = "DELETE FROM khachhang WHERE makh='$makh'";

if ($conn->query($sql) === TRUE) {
    echo "Xóa khách hàng thành công!";
} else {
    echo "Lỗi: " . $conn->error;
}
$conn->close();
?>
