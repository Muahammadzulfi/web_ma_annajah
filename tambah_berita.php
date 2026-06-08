<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Berita - Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        /* Sama seperti style yang kamu punya */
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Tambah Berita Baru</h2>
        <form action="proses_simpan.php" method="POST" enctype="multipart/form-data">
            
            <!-- ✅ WAJIB ADA 3 BAGIAN INI -->
            <label>Judul Berita</label>
            <input type="text" name="judul" placeholder="Contoh: Kegiatan Matsama Hari ke-4" required>

            <label>Isi / Keterangan Lengkap</label>
            <textarea name="keterangan" rows="8" placeholder="Tulis cerita lengkap kegiatan hari ini..." required></textarea>

            <label>Upload Foto Kegiatan</label>
            <input type="file" name="foto" accept="image/jpeg, image/png, image/jpg" required>

            <button type="submit">📤 SIMPAN BERITA</button>
        </form>
        <a href="halaman_admin.php">⬅ Kembali ke Panel</a>
    </div>
</body>
</html>