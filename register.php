<?php
// File: register.php
include 'koneksi.php';
require_once 'user.php';
$user = new User($conn);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($user->register($_POST['nama'], $_POST['email'], $_POST['password'])) {
        $success = true;
    } else {
        $error = "Pendaftaran gagal. Email mungkin sudah digunakan.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Gmail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-info-subtle">
    <div class="card p-4 shadow-lg" style="width: 450px;">
        <h3 class="mb-3 text-center">Buat Akun Gmail</h3>
        <?php if (!empty($success)) echo "<div class='alert alert-success'>Berhasil daftar! <a href='login.php'>Login sekarang</a></div>"; ?>
        <?php if (!empty($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
        <form method="post">
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Daftar</button>
        </form>
    </div>
</body>
</html>