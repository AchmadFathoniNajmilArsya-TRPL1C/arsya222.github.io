<?php
include 'koneksi.php'; // Memasukkan file koneksi

// Query untuk mendapatkan data pengajuan
$query = "SELECT nim, name, program, date, status, file_status, detail_link FROM halaman_pengajuan";
$result = $conn->query($query);

// Cek apakah query berhasil
if (!$result) {
    die("Query gagal: " . $conn->error);
}
if ($conn === false) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Debug untuk memeriksa hasil query
while ($row = $result->fetch_assoc()) {
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}

// Fungsi untuk menampilkan sidebar
function renderSidebar() {
    return "
        <div class='sidebar'>
            <div class='logo'>
                <img src='../assets/img/kampus_merdeka.png' alt='Logo' class='img-fluid' style='max-width: 200px;'>
            </div>
            <nav>
                <a href='#' class='dashboard'>
                    <span class='icon'><i class='fas fa-home-alt'></i></span>
                    <span class='text'>DASHBOARD</span>
                </a>
                <a href='#' class='pengajuan'>
                    <span class='icon'><i class='fas fa-file-alt'></i></span>
                    <span class='text'>PENGAJUAN</span>
                </a>
            </nav>
        </div>
    ";
}

// Fungsi untuk menampilkan header
function renderHeader($title) {
    return "
        <div class='header'>
            <h1>$title</h1>
            <div class='user-menu'>
                <div class='profile-icon' onclick='toggleDropdown()'>
                    <img src='ikon_profil.png' alt='Profile Icon' />
                </div>
                <div class='dropdown' id='dropdownMenu'>
                    <span>Muhammad Ridho Syahputra<br />NIM: 4342411088</span>
                    <button><i class='fas fa-user'></i> Profile</button>
                    <button><i class='fas fa-key'></i> Change Password</button>
                    <button><i class='fas fa-sign-out-alt'></i> Logout</button>
                </div>
            </div>
        </div>
    ";
}

// Fungsi untuk menampilkan tabel pengajuan
function renderTable() {
    return "
        <form>
            <table id='example' class='display' style='width:100%'>
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
                        <td><button class='btn btn-warning'>Menunggu Persetujuan</button></td>
                        <td></td>
                        <td class='text-center'>
                            <a href='Add Pengajuan_1.html'><button class='btn btn-primary'><i class='bi bi-info-circle-fill'></i> Lihat Form</button></a>
                        </td>
                        <td class='text-center'>
                            <button class='btn btn-warning'>Ubah</button>
                            <button class='btn btn-danger'>Batal</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <script>
                new DataTable('#example');
            </script>
        </form>
    ";
}

// Output halaman
echo renderSidebar();
echo renderHeader("Riwayat Pengajuan");
echo renderTable();
?>
