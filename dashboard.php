<?php
session_start();
require 'koneksi.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Times, sans-serif;
            background-image: url('origami.jpg'); /* Ganti dengan path gambar latar belakangmu */
            background-size: cover;
            background-position: center;
        }
        .container {
            text-align: center;
            border: 1px solid #ccc;
            padding: 40px; /* Perbesar padding untuk ruang ekstra */
            border-radius: 8px; /* Membuat sudut lebih bulat */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Bayangan lebih menonjol */
            background-color: rgba(255, 255, 255, 0.9); /* Transparansi lebih tinggi */
            width: 100%;
            max-width: 600px; /* Lebar kontainer lebih besar */
        }
        h2 {
            margin: 0 0 30px; /* Jarak bawah yang lebih besar */
            font-size: 24px; /* Ukuran font yang lebih besar */
            color: #333;
        }
        a {
            display: block;
            margin: 15px 0; /* Jarak vertikal lebih besar */
            color: #007bff;
            text-decoration: none;
            font-size: 20px; /* Ukuran font lebih besar */
            padding: 10px; /* Padding tambahan untuk area klik */
            border-radius: 5px; /* Sudut membulat untuk link */
            transition: background-color 0.3s ease, color 0.3s ease; /* Transisi efek saat hover */
        }
        a:hover {
            text-decoration: underline;
            background-color: #e9ecef; /* Latar belakang saat hover */
            color: #0056b3; /* Warna teks saat hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Dashboard</h2>
        <p><a href="input_nota.php">Input Nota Baru</a></p>
        <p><a href="daftar_nota.php">Daftar Nota</a></p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>
