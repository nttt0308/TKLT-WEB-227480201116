<?php
session_start();
session_destroy();
header('Location:ex21login.html');
?>