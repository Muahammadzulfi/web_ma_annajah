<?php
include 'config.php';

// 👇 ISI ALamat FOLDER UPLOAD SESUAI KAMU 👇
$folder_tujuan = "uploads/berita/"; 

if (!is_dir($folder_tujuan)) {
    mkdir($folder_tujuan, 0777, true); // Buat folder jika belum ada
}

// Ambil data dari form
$judul = $_POST['judul'];
$ket   = $_POST['keterangan'];
$foto  = $_FILES['foto']['name'];
$tmp   = $_FILES['foto']['tmp_name'];

// Beri nama unik biar tidak tertimpa
$nama_file_baru = date("YmdHis") . "_" . $foto;

// Pindahkan foto ke folder
if (move_uploaded_file($tmp, $folder_tujuan . $nama_file_baru)) {
    
    // Simpan ke Database
    $sql = "INSERT INTO berita (judul, keterangan, foto) 
            VALUES ('$judul', '$ket', '$nama_file_baru')";
    
    mysqli_query($koneksi, $sql);

    echo "<script>alert('✅ Berita Berhasil Ditambahkan!'); location='halaman_admin.php';</script>";
} else {
    echo "<script>alert('❌ Gagal Upload Foto! Cek folder & izin akses');</script>";
}
?>