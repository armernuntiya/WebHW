<?php

$servername = 'localhost';
$username = 'root';
$password = '12345678';
$dbname = 'dbweb';

$conn = mysqli_connect($servername, $username, $password, $dbname);

mysqli_set_charset($conn, "utf8");
/*
   (!$conn) {
    	die("Connection : failed (เชื่อมต่อฐานข้อมูล ไม่ สำเร็จ)".mysqli_connect_error());
	}
*/

?>