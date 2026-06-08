<?php
session_start(); // ❗ WAJIB ADA, kalau tidak ada pasti gagal login

$host = "localhost";
$user = "root";
$pass = "";
$db   = "web"; // <- Pastikan ini nama database yang benar

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

function harus_login() {
    if (!isset($_SESSION['admin'])) {
        header("Location: login.php");
        exit;
    }
}
?>