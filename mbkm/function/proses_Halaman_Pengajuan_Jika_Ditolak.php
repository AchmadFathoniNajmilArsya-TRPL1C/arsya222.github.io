<?php
include 'koneksi.php'; // Menghubungkan file koneksi ke database

// Simulasi status pengajuan
$status_pengajuan = 'ditolak'; // Ubah status sesuai kebutuhan
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Halaman Pengajuan</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <img src="kampus_merdeka.png" alt="Logo">
        </div>
        <nav>
            <a href="#" class="dashboard">
                <span class="icon"><i class="fas fa-home-alt"></i></span>
                <span class="text">DASHBOARD</span>
            </a>
            <a href="#" class="pengajuan">
                <span class="icon"><i class="fas fa-file-alt"></i></span>
                <span class="text">PENGAJUAN</span>
            </a>
        </nav>
    </div>

    <div class="content">
        <div class="header">
            <h1>Riwayat Pengajuan</h1>
        </div>
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Status Pengajuan</th>
                    <th>Status Berkas</th>
                    <th>Detail</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $rows = [
                    ['5454544656', 'Budi', 'TRPL', '15/10/2024', 'Menunggu', '', 'lihat form', 'Ubah | Batal'],
                    ['5454544656', 'Budi', 'TRPL', '15/10/2024', 'Diterima', 'Upload Berkas Akhir', 'lihat form', 'Upload'],
                    ['5454544656', 'Budi', 'TRPL', '15/10/2024', 'Ditolak', '', 'lihat form', 'Revisi']
                ];

                foreach ($rows as $row) {
                    $status_class = '';
                    if (strtolower($row[4]) === 'menunggu') $status_class = 'btn-warning';
                    if (strtolower($row[4]) === 'diterima') $status_class = 'btn-success';
                    if (strtolower($row[4]) === 'ditolak') $status_class = 'btn-danger';

                    echo "<tr>
                        <td>{$row[0]}</td>
                        <td>{$row[1]}</td>
                        <td>{$row[2]}</td>
                        <td>{$row[3]}</td>
                        <td><button class='btn {$status_class}'>{$row[4]}</button></td>
                        <td>{$row[5]}</td>
                        <td><button class='btn btn-primary'>{$row[6]}</button></td>
                        <td>{$row[7]}</td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        new DataTable('#example');
    </script>
</body>
</html>
