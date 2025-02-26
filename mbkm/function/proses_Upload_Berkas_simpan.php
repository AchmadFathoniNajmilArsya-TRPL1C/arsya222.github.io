<?php
// Menyertakan file koneksi
include '../function/koneksi.php'; // Menghubungkan file koneksi ke database


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Folder tujuan untuk menyimpan file
    $targetDir = "uploads/";
    $response = '';

    // Cek apakah folder sudah ada
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    // Proses upload file Transkrip Nilai
    if (isset($_FILES['transkrip_nilai']) && $_FILES['transkrip_nilai']['error'] == 0) {
        $targetFileTranskrip = $targetDir . basename($_FILES['transkrip_nilai']['name']);
        move_uploaded_file($_FILES['transkrip_nilai']['tmp_name'], $targetFileTranskrip);
        $response .= "Transkrip Nilai berhasil diunggah.<br>";
    } else {
        $response .= "Gagal mengunggah Transkrip Nilai.<br>";
    }

    // Proses upload file Dokumen MBKM
    if (isset($_FILES['dokumen_mbkm']) && $_FILES['dokumen_mbkm']['error'] == 0) {
        $targetFileMBKM = $targetDir . basename($_FILES['dokumen_mbkm']['name']);
        move_uploaded_file($_FILES['dokumen_mbkm']['tmp_name'], $targetFileMBKM);
        $response .= "Dokumen MBKM berhasil diunggah.<br>";
    } else {
        $response .= "Gagal mengunggah Dokumen MBKM.<br>";
    }

    // Tampilkan hasil
    echo $response;
}
?>
