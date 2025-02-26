document.addEventListener("DOMContentLoaded", () => {
  // Data pengguna dan pengajuan
  const user = { nim: "4342411088", name: "Muhammad Ridho Syahputra" };
  const submissions = [
      {
          nim: "5454544656",
          name: "Budi",
          program: "TRPL",
          date: "15/10/2024",
          status: "Menunggu Persetujuan",
          fileStatus: "",
          detailLink: "Add Pengajuan_1.html",
      },
      {
          nim: "5454544656",
          name: "Budi",
          program: "TRPL",
          date: "15/10/2024",
          status: "Diterima",
          fileStatus: "Diterima",
          detailLink: "Add Pengajuan_1.html",
      },
      {
          nim: "5454544656",
          name: "Budi",
          program: "TRPL",
          date: "15/10/2024",
          status: "Ditolak",
          fileStatus: "",
          detailLink: "Add Pengajuan_1.html",
      },
  ];

  // Fungsi untuk membuat sidebar
  const renderSidebar = () => `
      <div class="sidebar">
          <div class="logo">
              <img src="../assets/img/kampus_merdeka.png" alt="Kampus Merdeka" style="max-width: 200px;" />
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
  `;

  // Fungsi untuk membuat header
  const renderHeader = (title) => `
      <div class="header">
          <h1>${title}</h1>
          <div class="user-menu">
              <div class="profile-icon" onclick="toggleDropdown()">
                  <img src="ikon profil.png" alt="Profile Icon" />
              </div>
              <div class="dropdown" id="dropdownMenu">
                  <span>${user.name}<br />NIM: ${user.nim}</span>
                  <button><i class="fas fa-user"></i> Profile</button>
                  <button><i class="fas fa-key"></i> Change Password</button>
                  <button><i class="fas fa-sign-out-alt"></i> Logout</button>
              </div>
          </div>
      </div>
  `;

  // Fungsi untuk membuat tabel
  const renderTable = () => {
      const rows = submissions.map(submission => `
          <tr>
              <td>${submission.nim}</td>
              <td>${submission.name}</td>
              <td>${submission.program}</td>
              <td>${submission.date}</td>
              <td><button class="btn btn-${submission.status === "Diterima" ? "success" : submission.status === "Ditolak" ? "danger" : "warning"}">${submission.status}</button></td>
              <td>${submission.fileStatus ? `<button class="btn btn-success">${submission.fileStatus}</button>` : ""}</td>
              <td><a href="${submission.detailLink}"><button class="btn btn-primary">Lihat Form</button></a></td>
              <td>
                  ${submission.status === "Menunggu Persetujuan" ? `
                      <button class="btn btn-warning">Ubah</button>
                      <button class="btn btn-danger">Batal</button>
                  ` : ""}
              </td>
          </tr>
      `).join("");

      return `
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
              <tbody>${rows}</tbody>
          </table>
      `;
  };

  // Render ke DOM
  document.body.innerHTML = `
      ${renderSidebar()}
      <div class="content">
          ${renderHeader("Pengajuan")}
          <div>
              <button type="button" class="btn btn-primary">Tambah Pengajuan</button>
          </div>
          ${renderTable()}
      </div>
  `;

  // Toggle the dropdown menu
  window.toggleDropdown = function() {
      document.getElementById("dropdownMenu").classList.toggle("show");
  };

  // Close dropdown if clicked outside
  window.onclick = function(event) {
      if (!event.target.matches('.profile-icon')) {
          var dropdowns = document.getElementsByClassName("dropdown");
          for (var i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('show')) {
                  openDropdown.classList.remove('show');
              }
          }
      }
  };

  // Inisialisasi DataTable (hindari pengulangan)
  $('#example').DataTable({
      destroy: true, // Pastikan tabel dapat diinisialisasi ulang
      columns: [
          { title: "NIM" },
          { title: "Nama" },
          { title: "Program Studi" },
          { title: "Tanggal Pengajuan" },
          { title: "Status Pengajuan" },
          { title: "Status Berkas" },
          { title: "Detail" },
          { title: "Aksi" }
      ]
  });
});
