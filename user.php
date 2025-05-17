<?php
class User {
    private $conn;
    public function __construct($db) {
        $this->conn = $db;
    }

    public function login($email, $password) {
        $stmt = $this->conn->prepare("SELECT * FROM pengguna WHERE email = ? AND password = ?");
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function register($nama, $email, $password) {
        $stmt = $this->conn->prepare("INSERT INTO pengguna (nama, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nama, $email, $password);
        return $stmt->execute();
    }
}
?>
