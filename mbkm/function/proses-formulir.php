<?php
// Koneksi ke database (sesuaikan dengan kredensial Anda)
include 'koneksi.php';

// Debugging: Periksa apakah parameter 'nim_nik' diterima dengan benar
if (isset($_GET['nim_nik'])) {
    $nim_nik = $_GET['nim_nik'];
    // Debugging: tampilkan nilai parameter
    var_dump($nim_nik);
} else {
    echo json_encode(["error" => "NIM/NIK tidak diberikan"]);
    exit;
}

// Ambil data berdasarkan NIM/NIK yang dikirim melalui parameter GET
$sql = "SELECT nama_lengkap, nim_nik, id_prodi FROM users WHERE nim_nik = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $nim_nik);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

if ($data) {
    echo json_encode($data);
} else {
    echo json_encode(["error" => "Data tidak ditemukan"]);
}

$stmt->close();
$conn->close();
?>
