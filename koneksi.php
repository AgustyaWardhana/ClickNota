<?php
$host = 'localhost';
$user = 'root'; // Ganti dengan username database Anda
$pass = ''; // Ganti dengan password database Anda
$db   = 'percetakan'; // Nama database

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die('Database tidak terhubung: ' . mysqli_connect_error());
}
?>
