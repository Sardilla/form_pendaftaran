CREATE DATABASE IF NOT EXISTS gmail_simulasi;
USE gmail_simulasi;

CREATE TABLE pengguna (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255)
);