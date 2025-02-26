// JavaScript untuk Halaman Pengajuan

// Toggle Dropdown Menu
function toggleDropdown() {
    const dropdownMenu = document.getElementById('dropdownMenu');
    dropdownMenu.classList.toggle('show');
  }
  
  // Tutup dropdown saat klik di luar
  window.addEventListener('click', function (e) {
    const dropdown = document.getElementById('dropdownMenu');
    const profileIcon = document.querySelector('.profile-icon img');
    if (!dropdown.contains(e.target) && e.target !== profileIcon) {
      dropdown.classList.remove('show');
    }
  });
  
  // Inisialisasi DataTable
  document.addEventListener('DOMContentLoaded', function () {
    const dataTable = new DataTable('#example');
  });
  
  // Event Listener untuk tombol aksi
  document.addEventListener('click', function (e) {
    const target = e.target;
  
    // Aksi tombol Ubah
    if (target.matches('.btn-warning')) {
      alert('Fungsi Ubah belum diimplementasikan.');
    }
  
    // Aksi tombol Batal
    if (target.matches('.btn-danger')) {
      const confirmCancel = confirm('Apakah Anda yakin ingin membatalkan pengajuan?');
      if (confirmCancel) {
        alert('Pengajuan berhasil dibatalkan.');
      }
    }
  
    // Aksi tombol Daftar
    if (target.matches('.btn-primary')) {
      alert('Fungsi Daftar belum diimplementasikan.');
    }
  });
  