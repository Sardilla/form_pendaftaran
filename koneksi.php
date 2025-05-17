<?php
$conn = new mysqli("localhost", "root", "", "gmail_simulasi");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>