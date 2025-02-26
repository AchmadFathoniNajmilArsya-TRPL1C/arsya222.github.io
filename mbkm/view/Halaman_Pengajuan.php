<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pengajuan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">
            <img src="kampus_merdeka.png" alt="Logo">
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
                <div class="profile-icon">
                    <img src="ikon_profil.png" alt="Profile Icon">
                </div>
                <!-- Dropdown Menu -->
                <div class="dropdown" id="dropdownMenu">
                    <span>Muhammad Ridho Syahputra<br>NIM: 4342411088</span>
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
        <!-- Table -->
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
                    <tr>
                        <td>5454544656</td>
                        <td>Budi</td>
                        <td>TRPL</td>
                        <td>15/10/2024</td>
                        <td><button type="button" class="btn btn-warning">Menunggu Persetujuan</button></td>
                        <td></td>
                        <td><a href="add_pengajuan.html"><button type="button" class="btn btn-primary"><i class="bi bi-info-circle-fill"></i> Lihat Form</button></a></td>
                        <td class="text-center">
                            <button type="button" class="btn btn-warning">Ubah</button>
                            <button type="button" class="btn btn-danger">Batal</button>
                        </td>
                    </tr>
                    <tr>
                        <td>5454544656</td>
                        <td>Budi</td>
                        <td>TRPL</td>
                        <td>15/10/2024</td>
                        <td class="text-center"><button type="button" class="btn btn-success">Diterima</button></td>
                        <td><button type="button" class="btn btn-warning">Anda Belum Meng-upload Berkas Akhir</button></td>
                        <td><a href="add_pengajuan.html"><button type="button" class="btn btn-primary"><i class="bi bi-info-circle-fill"></i> Lihat Form</button></a></td>
                        <td class="text-center"><button type="button" class="btn btn-warning">Upload Berkas Akhir</button></td>
                    </tr>
                    <tr>
                        <td>5454544656</td>
                        <td>Budi</td>
                        <td>TRPL</td>
                        <td>15/10/2024</td>
                        <td class="text-center"><button type="button" class="btn btn-danger">Ditolak</button></td>
                        <td></td>
                        <td><a href="add_pengajuan.html"><button type="button" class="btn btn-primary"><i class="bi bi-info-circle-fill"></i> Lihat Form</button></a></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
    <script>
        new DataTable('#example');
    </script>
</body>
</html>
