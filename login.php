<?php
// File: login.php
session_start();
include 'koneksi.php';
require_once 'user.php';
$user = new User($conn);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $result = $user->login($_POST['email'], $_POST['password']);
    if ($result) {
        $_SESSION['user'] = $result;
        header("Location: dashboard.php");
    } else {
        $error = "Email atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Gmail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="card p-4 shadow" style="width: 400px;">
        <h3 class="mb-3 text-center">Login Akun Gmail</h3>
        <?php if (!empty($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
        <form method="post">
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</body>
</html>