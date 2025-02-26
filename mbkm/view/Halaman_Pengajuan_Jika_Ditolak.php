<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Pengajuan</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/Halaman_Pengajuan_Jika_Ditolak.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/Halaman_Pengajuan_Jika_Ditolak.js"></script>

</head>
<body>        
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">
            <img src="../mbkm/assets/img/kampus_merdeka.png" alt="Logo" class="small-image img-fluid" style="max-width: 200px;">
        </div>
        <nav>
            <!-- Menu Dashboard -->
            <a href="#" class="dashboard">
                <span class="icon"><i class="fas fa-home-alt"></i></span>
                <span class="text">DASHBOARD</span>
            </a>

            <!-- Menu Pengajuan -->
            <a href="#" class="pengajuan">
                <span class="icon"><i class="fas fa-file-alt"></i></span>
                <span class="text">PENGAJUAN</span>
            </a>
        </nav> 
    </div>
    
    <!-- Main Content -->
    <div class="content">
        <!-- Header -->
        <div class="header">
            <h1>Pengajuan</h1>
            <div class="user-menu">
                <!-- Profile Icon -->
                <div class="profile-icon" onclick="toggleDropdown()">
                    <img src="../mbkm/assets/img/icon.jpg" alt="Profile Icon" class="small-image img-fluid" style="max-width: 200px;">
                </div>
                <!-- Dropdown Menu -->
                <div class="dropdown" id="dropdownMenu">
                    <span>Muhammad Ridho Syahputra<br />NIM: 4342411088</span>
                    <button><i class="fas fa-user"></i> Profile</button>
                    <button><i class="fas fa-key"></i> Change Password</button>
                    <button><i class="fas fa-sign-out-alt"></i> Logout</button>
                </div>
            </div>
        </div>
        <div class="header">
            <h1>Riwayat Pengajuan</h1>
            <div>
                <button type="button" class="btn btn-primary">Tambah Pengajuan</button>
            </div>
        </div>

        <!-- Tabel Pengajuan -->
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
                // Include koneksi database
                include '../function/koneksi.php';

                // Query untuk mendapatkan data pengajuan
                $query = "SELECT nim, name, program, date, status, file_status, detail_link FROM halaman_pengajuan";
                $result = $conn->query($query);

                // Cek apakah query berhasil
                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $statusClass = $row['status'] === "Diterima" ? "success" : ($row['status'] === "Ditolak" ? "danger" : "warning");
                        echo "
                        <tr>
                            <td>{$row['nim']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['program']}</td>
                            <td>{$row['date']}</td>
                            <td><button class='btn btn-$statusClass'>{$row['status']}</button></td>
                            <td>" . (!empty($row['file_status']) ? "<button class='btn btn-success'>{$row['file_status']}</button>" : "") . "</td>
                            <td><a href='{$row['detail_link']}'><button type='button' class='btn btn-primary'><i class='bi bi-info-circle-fill'></i> Lihat Form</button></a></td>
                            <td>" . ($row['status'] === "Menunggu Persetujuan" ? "
                                <button type='button' class='btn btn-warning'>Ubah</button>
                                <button type='button' class='btn btn-danger'>Batal</button>" : "") . "
                            </td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='8' class='text-center'>Tidak ada data pengajuan.</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
    </div>
</body>
</html>
