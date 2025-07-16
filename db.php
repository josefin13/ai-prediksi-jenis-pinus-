<?php
$host     = "localhost";
$username = "root";
$password = ""; // kosongkan jika pakai XAMPP / Laragon
$database = "ai_pinus";

// Buat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}
?>