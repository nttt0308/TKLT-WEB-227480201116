<?php
session_start();
if(!isset($_SESSION['username'])) {
    header('Location:ex21login.html');
    exit();
}
?>
<h2>Chào mừng<?php echo $_SESSION['username']; ?>!</h2>
<p>Email:<?php echo $_SESSION['email']; ?></p>
<a href="ex21logout.php">Đăng xuất</a>