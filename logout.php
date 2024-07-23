<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Times, sans-serif;
            background-image: url('terimakasih.jpg'); /* Ganti dengan path gambar latar belakangmu */
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
        }
        h2 {
            margin: 0 0 20px;
        }
        p {
            margin: 10px 0;
        }
        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 20px;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Anda telah berhasil logout</h2>
        <p>Anda akan dialihkan ke halaman login dalam beberapa detik.</p>
        <p><a href="login.php">Kembali ke Login</a></p>
        <script>
            // Redirect to login page after 3 seconds
            setTimeout(function() {
                window.location.href = 'login.php';
            }, 3000);
        </script>
    </div>
</body>
</html>
