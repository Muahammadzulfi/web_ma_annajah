<?php
include 'config.php';

// 👇 ISI SENDIRI SESUAI KEINGINANMU 👇
$username = "admin";   // Ganti jadi nama pengguna rahasia kamu
$password = "berita123";      // Ganti jadi kata sandi rahasia kamu

if ($_POST['user'] == $username && $_POST['pass'] == $password) {
    $_SESSION['admin'] = true;
    header("Location: halaman_admin.php");
} else {
    header("Location: login.php?pesan=gagal");
}
?>