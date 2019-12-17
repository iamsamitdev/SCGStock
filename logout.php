<?php
session_start();
// เคลียร์ session
session_destroy();
// ส่งไปหน้า login
header("location:index.php");
?>