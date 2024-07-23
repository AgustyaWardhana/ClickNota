<?php
session_start();
require 'koneksi.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$query = "SELECT * FROM nota WHERE user_id = '{$_SESSION['user_id']}' ORDER BY tanggal DESC";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Nota</title>
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
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: rgba(255, 255, 255, 0.9); /* Transparansi untuk konten di atas gambar */
            width: 100%;
            max-width: 900px;
        }
        h2 {
            margin: 0 0 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
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
        <h2>Daftar Nota</h2>
        <table>
            <tr>
                <th>Tanggal</th>
                <th>Pelanggan</th>
                <th>Keterangan</th>
                <th>Total</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['tanggal']); ?></td>
                <td><?php echo htmlspecialchars($row['pelanggan']); ?></td>
                <td><?php echo htmlspecialchars($row['keterangan']); ?></td>
                <td><?php echo htmlspecialchars($row['total']); ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
        <p><a href="dashboard.php">Kembali ke Dashboard</a></p>
    </div>
</body>
</html>
