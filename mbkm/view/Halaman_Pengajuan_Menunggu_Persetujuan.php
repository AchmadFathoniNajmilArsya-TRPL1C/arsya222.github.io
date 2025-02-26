<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="halaman-pengajuan.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <title>Halaman Pengajuan</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
          <h1>
            Pengajuan
          </h1>
          <div class="user-menu">
            <!-- Profile Icon -->
            <div class="profile-icon" onclick="toggleDropdown()">
              <img src="ikon profil.png" alt="Profile Icon" />
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
          <h1>
            Riwayat Pengajuan
          </h1>
          <div>
            <button type="button" class="btn btn-primary">Daftar</button>
          </div>
        </div>
    <form>
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Program studi</th>
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
                  <td>budi</td>
                  <td>trpl</td>
                  <td>15/10/2024</td>
                  <td><button type="stank" class="btn btn-warning">menunggu persetujuan</button></td>
                  <td></td>
                  <td class="text-center"><a href="Add Pengajuan_1.html"><button type="button" class="btn btn-primary"><i class="bi bi-info-circle-fill"></i> lihat form</button></a></td>
                  <td class="text-center"><button type="button" class="btn btn-warning">Ubah</button>
                    <button type="button" class="btn btn-danger">Batal</button></td>
              </tr>
              <tr>
                  <td>5454544656</td>
                  <td>budi</td>
                  <td>trpl</td>
                  <td>15/10/2024</td>
                  <td class="text-center"><button type="button" class="btn btn-success">diterima</button></td>>
                  <td><button type="button" class="btn btn-warning">anda belum meng-upload berkas akhir</button></td>
                  <td class="text-center"><a href="Add Pengajuan_1.html"><button type="button" class="btn btn-primary"><i class="bi bi-info-circle-fill"></i> lihat form</button></a>
                      <p></p><button type="button" class="btn btn-primary">lihat berkas akhir</button></td>
                  <td></td>
            
            </tr>
                <tr>
                  <td>5454544656</td>
                    <td>budi</td>
                    <td>trpl</td>
                  <td>15/10/2024</td>
                  <td class="text-center"><button type="button" class="btn btn-danger">ditolak</button></td>
                  <td></td>
                  <td class="text-center"><a href="Add Pengajuan_1.html"><button type="button" class="btn btn-primary"><i class="bi bi-info-circle-fill"></i> lihat form</button></a></td>
                  <td></td>
              </tr>
            </tbody>
            </table>
            <script>
            new DataTable('#example');
            </script>
            </form>
            </body>
            </html>