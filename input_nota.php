<?php
session_start();
require 'koneksi.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pelanggan = $_POST['pelanggan'];
    $keterangan = $_POST['keterangan'];
    $total = $_POST['total'];
    $user_id = $_SESSION['user_id'];

    $query = "INSERT INTO nota (user_id, pelanggan, keterangan, total) VALUES ('$user_id', '$pelanggan', '$keterangan', '$total')";
    mysqli_query($koneksi, $query);

    header('Location: daftar_nota.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Input Nota</title>
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
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: rgba(255, 255, 255, 0.9); /* Transparansi untuk konten di atas gambar */
            width: 100%;
            max-width: 500px;
        }
        h2 {
            margin: 0 0 20px;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        input[type="text"],
        input[type="number"],
        textarea {
            margin: 10px 0;
            padding: 15px;
            width: 100%;
            max-width: 100%;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box; /* Pastikan padding dan border termasuk dalam lebar elemen */
        }
        textarea {
            height: 120px;
            resize: vertical;
        }
        input[type="number"] {
            padding-right: 20px; /* Ruang untuk angka desimal */
        }
        button {
            padding: 15px 20px;
            background-color: #007bff;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
        a {
            display: block;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
            font-size: 16px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Input Nota Baru</h2>
        <form method="post" action="">
            <input type="text" name="pelanggan" placeholder="Nama Pelanggan" required><br>
            <textarea name="keterangan" placeholder="Keterangan" required></textarea><br>
            <input type="number" step="0.01" name="total" placeholder="Total" required><br>
            <button type="submit">Simpan</button>
        </form>
        <p><a href="dashboard.php">Kembali ke Dashboard</a></p>
    </div>
</body>
</html>
