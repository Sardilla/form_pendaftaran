<?php
// File: index.php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gmail Simulasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #dbeafe, #93c5fd);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }
        .menu {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 5px 15px rgba(0,0,0,0.2);
            text-align: center;
        }
        .menu h2 {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="menu">
        <h2>Selamat Datang di Gmail Simulasi</h2>
        <a href="login.php" class="btn btn-primary">Login</a>
        <a href="register.php" class="btn btn-success">Daftar</a>
    </div>
</body>
</html>
