<?php
session_start();
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

if($username == 'thuthao' && $email=='thuthao@example.com' && $password=='1709')
{
    $_SESSION['username']=$username;
    $_SESSION['email']=$email;
    header('Location:ex21mainpage.php');
} else {
    echo"Đăng nhập thất bại";
}
?>