<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - MA An-Najah</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            background-color: #222;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 15px;
        }
        .login-kotak {
            background: #f4f4f4;
            width: 100%;
            max-width: 400px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 20px rgba(0,0,0,0.4);
        }
        .login-header {
            background-color: #005a36;
            color: white;
            padding: 15px;
            text-align: center;
            font-weight: bold;
            font-size: 18px;
        }
        .login-isi {
            padding: 25px;
        }
        .form-grup {
            margin-bottom: 15px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            font-size: 13px;
        }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 12px;
        }
        .btn-login {
            width: 100%;
            padding: 10px;
            background-color: #09aa4c;
            color: white;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            font-size: 14px;
        }
        .btn-login:hover {
            background-color: #005a36;
        }
        .pesan-error {
            background: #ffe0e0;
            color: #b90000;
            padding: 8px;
            text-align: center;
            border-radius: 6px;
            margin-bottom: 15px;
            font-size: 12px;
        }
        .kembali {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #005a36;
            text-decoration: none;
            font-size: 12px;
        }
    </style>
</head>
<body>

<div class="login-kotak">
    <div class="login-header">
        <i class="fa fa-user-shield"></i> LOGIN ADMIN
        <div style="font-size:11px; opacity:0.8; margin-top:3px;">MA AN-NAJAH CILONGOK</div>
    </div>
    <div class="login-isi">

        <?php
        if (isset($_GET['pesan'])) {
            echo "<div class='pesan-error'>❌ Username atau Password salah!</div>";
        }
        ?>

<?php
session_start(); // ❗ PENTING: Ini wajib ada di baris paling atas

include 'config.php';

// 👇 INI DATA YANG HARUS KAMU KETIK 👇
$username = "admin";   
$password = "berita123"; 

// ✅ DIPERBAIKI: Tulisan harus sama persis dengan name di input
if ($_POST['username'] == $username && $_POST['password'] == $password) {
    $_SESSION['admin'] = true;
    header("Location: halaman_admin.php"); // <- Pastikan nama filenya benar
    exit;
} else {
    header("Location: login.php?pesan=gagal");
    exit;
}
?>
    </div>
</div>

</body>
</html>