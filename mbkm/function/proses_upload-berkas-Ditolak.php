<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <title>Halaman Pengajuan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="upload-berkas.css">
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
            Upload Berkas Akhir
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

<div class="mb-3">
  <p><h2 class="text-center">Transkip Nilai</h2></p>
  <label for="formFile" class="form-label"></label>
  <input class="form-control" type="file" id="formFile">
</div>

<div class="mb-3">
  <p><h2 class="text-center">Dokumen MBKM</h2></p>
  <label for="formFile" class="form-label"></label>
  <input class="form-control" type="file" id="formFile">
</div>

</body>
</html>