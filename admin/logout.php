<?php
session_start();

// if (isset($_SESSION['admin_id'])) {
//     unset($_SESSION['admin_id']);
// }
// header("Location: login.php");

session_unset();
session_destroy();
echo "<script>alert('로그아웃 성공!Salamat');</script>";
echo "<script>window.open('login.php','_self')</script>";
?>