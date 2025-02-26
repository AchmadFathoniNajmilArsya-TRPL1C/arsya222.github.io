<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Pengajuan</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/Halaman_Pengajuan_Jika_Diterima.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/halaman_pengajuan.js"></script>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">
            <img src="../mbkm/assets/img/kampus_merdeka.png" alt="Kampus Merdeka" style="max-width: 200px;" />
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

    <!-- Main Content -->
    <div class="content">
        <!-- Header -->
        <div class="header">
            <h1>Pengajuan</h1>
            <div class="user-menu">
                <div class="profile-icon">
                    <img src="../mbkm/assets/img/icon.jpg" alt="User Profile" style="max-width: 200px;" />
                </div>
                <div class="dropdown" id="dropdownMenu">
                    <span>Muhammad Ridho Syahputra<br />NIM: 4342411088</span>
                    <button><i class="fas fa-user"></i> Profile</button>
                    <button><i class="fas fa-key"></i> Change Password</button>
                    <button><i class="fas fa-sign-out-alt"></i> Logout</button>
                </div>
            </div>
        </div>
        <div>
            <h1>Riwayat Pengajuan</h1>
            <button type="button" class="btn btn-primary">Tambah Pengajuan</button>
        </div>
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
                        echo "<tr>";
                        echo "<td>{$row['nim']}</td>";
                        echo "<td>{$row['name']}</td>";
                        echo "<td>{$row['program']}</td>";
                        echo "<td>{$row['date']}</td>";
                        echo "<td><button type='button' class='btn btn-" . 
                            ($row['status'] === 'Diterima' ? 'success' : ($row['status'] === 'Ditolak' ? 'danger' : 'warning')) . "'>{$row['status']}</button></td>";
                        echo "<td>" . ($row['file_status'] ? "<button class='btn btn-success'>{$row['file_status']}</button>" : "") . "</td>";
                        echo "<td><a href='{$row['detail_link']}'><button type='button' class='btn btn-primary'>Lihat Form</button></a></td>";
                        echo "<td>";
                        if ($row['status'] === 'Menunggu Persetujuan') {
                            echo "<button type='button' class='btn btn-warning'>Ubah</button>";
                            echo "<button type='button' class='btn btn-danger'>Batal</button>";
                        }
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8' class='text-center'>Tidak ada data pengajuan.</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </form>
    </div>

    <script>
        new DataTable('#example');
    </script>
</body>
</html>
