<?php
// Include koneksi database
include '../function/koneksi.php';

// Query untuk mendapatkan data pengajuan
$query = "SELECT nim, nama, program_studi, tanggal_pengajuan, status_pengajuan, status_berkas FROM pengajuan";

$result = $conn->query($query);

// Cek apakah query berhasil
if (!$result) {
    die("Query gagal: " . $conn->error);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../assets/css/Halaman_Pengajuan_Jika_Diterima.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Halaman Pengajuan</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="sidebar">
    <div class="logo">
        <img src="../assets/img/kampus_merdeka.png" alt="Logo" style="max-width: 200px;">
    </div>
    <nav>
        <a href="#" class="dashboard"><span class="icon"><i class="fas fa-home-alt"></i></span> DASHBOARD</a>
        <a href="#" class="pengajuan"><span class="icon"><i class="fas fa-file-alt"></i></span> PENGAJUAN</a>
    </nav>
</div>
<div class="content">
    <h1>Riwayat Pengajuan</h1>
    <button type="button" class="btn btn-primary">Tambah Pengajuan</button>
    <form>
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Status Pengajuan</th>
                    <th>Status Berkas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Data dari database
                ?>
            </tbody>
        </table>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script src="../assets/js/scripts.js"></script>
</body>
</html>
