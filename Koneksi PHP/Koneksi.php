<?php
$ip = "localhost";
$user = "root";
$pass = "";
$db = "db_mahasiswa";
$koneksi = mysqli_connect($ip, $user, $pass, $db);
if(!$koneksi){
    die("Connection failed: " . mysqli_connect_error);
}
?>