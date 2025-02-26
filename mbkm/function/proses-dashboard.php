<?php
// Koneksi ke database
include 'koneksi.php';

// Ambil data mahasiswa dari database
$username = $_SESSION['username'];
$query = "SELECT nim_nik, username, nama_lengkap, email, no_handphone, alamat, id_prodi, role FROM users WHERE username = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

// Ambil nama prodi jika ada relasi dengan tabel prodi
$prodi = "";
if ($data['id_prodi']) {
    $queryProdi = "SELECT nama_prodi FROM prodi WHERE id_prodi = ?";
    $stmtProdi = $conn->prepare($queryProdi);
    $stmtProdi->bind_param("i", $data['id_prodi']);
    $stmtProdi->execute();
    $resultProdi = $stmtProdi->get_result();
    $prodiData = $resultProdi->fetch_assoc();
    $prodi = $prodiData['nama_prodi'] ?? "";
}
?>