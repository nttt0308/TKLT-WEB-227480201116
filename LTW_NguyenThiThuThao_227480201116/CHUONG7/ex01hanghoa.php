<?php
include 'Connection.php';

$mahang = $_POST['mahang'];
$tenhang = $_POST['tenhang'];
$mansx = $_POST['mansx'];
$namsx = $_POST['namsx'];
$gia = $_POST['gia'];

$sql = "INSERT INTO hanghoa VALUES ('$mahang', '$tenhang', '$mansx', '$namsx', '$gia')";

if ($conn->query($sql) === TRUE) {
    echo "Thêm hàng hóa thành công!";
} else {
    echo "Lỗi: " . $conn->error;
}
$conn->close();
?>
