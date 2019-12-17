<?php

    // ตัวแปรสำหรับไว้เชื่อมต่อฐานข้อมูล
    $host = "localhost";
    $user = "root";
    $pass = "1234";
    $dbname = "scgstockdb";

    // คำสั่งเชื่อมฐานข้อมูล mysql
    $connect = mysqli_connect($host,$user,$pass,$dbname);
    mysqli_set_charset($connect, 'utf8'); // เข้ารหัสฟอนต์เป็น utf8

    // ตรวจเช็คว่าเชื่อมต่อฐานข้อมูลสำเร็จหรือไม่
    if($connect){
        // echo "Connect Database Success";
    }else{
        echo "Connect Database Fail!!";
    }

?>