<?php
                // Koneksi ke database
                include("../function/koneksi.php");
                // Periksa koneksi
                if ($conn->connect_error) {
                    die("Koneksi gagal: " . $conn->connect_error);
                }

                // Ambil data dari tabel pengajuan
                $sql = "SELECT * FROM pengajuan";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Tampilkan data dalam tabel
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['nim'] . "</td>";
                        echo "<td>" . $row['nama'] . "</td>";
                        echo "<td>" . $row['program_studi'] . "</td>";
                        echo "<td>" . $row['tanggal_pengajuan'] . "</td>";
                        echo "<td>" . $row['status_pengajuan'] . "</td>";
                        echo "<td>" . $row['status_berkas'] . "</td>";
                        echo "<td>
                                <button class='btn btn-primary'><i class='fas fa-info-circle'></i> Lihat form</button>
                                <button class='btn btn-success'>Diterima</button>
                                <button class='btn btn-danger'>Ditolak</button>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>Tidak ada data</td></tr>";
                }

                $conn->close();
                ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Halaman Pengajuan</title>
</head>
<body>
    <!-- Main Content -->
    <div class="content">
        <h1>Persetujuan Pengajuan</h1>
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>nim</th>
                    <th>nama</th>
                    <th>program_studi</th>
                    <th>Tanggal_Pengajuan</th>
                    <th>status_pengajuan</th>
                    <th>Status_Berkas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
    <script>
        new DataTable('#example');
    </script>
</body>
</html>
