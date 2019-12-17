<?php
include "includes/connectdb.php";

// คำสั่งลบข้อมูลออกจากตาราง carstock
$sql = "DELETE FROM carstock WHERE id='$_GET[id]'";
$query = mysqli_query($connect, $sql);

// ส่งกลับไปหน้า carstock.php
header('location:carstock.php');

?>