<?php
session_start()
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $email=$_POST['email'];
    $password=$_POST['password'];
    $maso=$_POST['maso'];

    $users=parse_ini_file("users.ini",true);

    if(isset($users[$email]) && $users[$email] ['password']==$password && $users[$email] ['maso']== $maso) {
        $_SESSION['email']=$email;

        setcookie("user_login", $email, time() + 180, "/");
        echo "Đăng nhập thành công! Chuyển hướng sau 3 giây...";
        header("refresh:3;url=welcome.php");
    }else {
        echo "Sai thông tin đăng nhập";
    }
}
?>
