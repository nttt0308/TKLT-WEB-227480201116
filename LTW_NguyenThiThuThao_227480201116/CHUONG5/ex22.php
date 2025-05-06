<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tenKH = $_POST["tenKH"];
    $sdt = $_POST["sdt"];

    setcookie("tenKH", $tenKH, time() + 600);
    setcookie("sdt", $sdt, time() + 600);

    header("Location: ex22.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập khách hàng</title>
</head>
<body>
    <h2>Đăng nhập khách hàng</h2>
    <form method="post" action="ex22.php">
        Tên khách hàng: <input type="text" name="tenKH" required><br><br>
        Số điện thoại: <input type="text" name="sdt" required><br><br>
        <input type="submit" value="Đăng nhập">
    </form>
    
    <?php
    if (isset($_COOKIE["tenKH"]) && isset($_COOKIE["sdt"])) {
        echo "<h3>Thông tin cookie:</h3>";
        echo "Tên khách hàng: " . $_COOKIE["tenKH"] . "<br>";
        echo "Số điện thoại: " . $_COOKIE["sdt"];
    }
    ?>
</body>
</html>
