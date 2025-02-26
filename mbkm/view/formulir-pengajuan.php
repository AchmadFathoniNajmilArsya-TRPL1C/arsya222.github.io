
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Polibatam Student Information System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="../assets/css/formulir-pengajuan.css" />
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">
            <img src="../assets/img/Logo MBKM.png" alt="Logo" />
        </div>
        <nav>
            <a href="#" class="dashboard active" onclick="activateMenu(this)">
                <span class="icon"><i class="fas fa-home-alt"></i></span>
                <span class="text">DASHBOARD</span>
            </a>
            <a href="#" class="pengajuan" onclick="activateMenu(this)">
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
                Selamat Datang Di Sistem Informasi Dan Layanan Mahasiswa Polibatam
            </h1>
            <div class="user-menu">
                <!-- Profile Icon -->
                <div class="profile-icon" onclick="toggleDropdown()">
                    <img src="../assets/img/icon.jpg" alt="Profile Icon" />
                </div>
                <!-- Dropdown Menu -->
                <div class="dropdown" id="dropdownMenu">
                    <span><br />NIM: <?php echo $data['nim_nik']; ?></span>
                    <button><i class="fas fa-user"></i> Profile</button>
                    <button><i class="fas fa-key"></i> Change Password</button>
                    <a href="../function/logout.php"><button><i class="fas fa-sign-out-alt"></i> Logout</button></a>
                </div>>
            </div>
        </div>

        <!-- Welcome Message -->
        <div class="welcome">Formulir Pendaftaran Merdeka Belajar Kampus Merdeka</div>


        <!-- Formulir -->
        <form id="merdekaBelajarForm">
            <h1>FORMULIR PENDAFTARAN MERDEKA BELAJAR<br>POLITEKNIK NEGERI BATAM<br>
                <p>Tahun: <span id="tahun"></span></p>
                <script>
                    var dt = new Date();
                    document.getElementById("tahun").innerHTML = (dt.getFullYear());
                </script>
            </h1>
            <table>
                <tr>
                    <td>Nama:</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Nomor Induk Mahasiswa:</td>
                    <td><input type="text" name="nim" required></td>
                </tr>
                <tr>
                    <td>Program Studi Asal:</td>
                    <td><input type="text" name="prodiAsal" required></td>
                </tr>
                <tr>
                    <td>Dosen Pembimbing/Dosen Wali:</td>
                    <td><input type="text" name="dosenPembimbing" placeholder="Isi nama dosen wali apabila tidak ada dosen pembimbing magang/TA"></td>
                </tr>
                <tr>
                    <td>Jenis Program Merdeka Belajar:</td>
                    <td>
                        <select name="program" id="program-dropdown" onchange="toggleProgramSpecificFields()">
                            <option value="">Pilih Program</option>
                            <option value="Penelitian/Riset">Penelitian/Riset</option>
                            <option value="Proyek Kemanusiaan">Proyek Kemanusiaan</option>
                            <option value="Kegiatan Wirausaha">Kegiatan Wirausaha</option>
                            <option value="Studi/Proyek Independen">Studi/Proyek Independen</option>
                            <option value="Membangun Desa / Kuliah Kerja Nyata Tematik">Membangun Desa / Kuliah Kerja Nyata Tematik</option>
                            <option value="Magang Praktik Kerja">Magang Praktik Kerja</option>
                            <option value="Asistensi Mengajar Di Satuan Pendidikan">Asistensi Mengajar Di Satuan Pendidikan</option>
                            <option value="Pertukaran Pelajar">Pertukaran Pelajar</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Alasan Memilih Program:</td>
                    <td><textarea name="alasan" rows="3" placeholder="Tuliskan alasan Anda memilih program ini"></textarea></td>
                </tr>
                <tr>
                    <td>Judul Program/Kegiatan:</td>
                    <td><input type="text" name="judulProgram"></td>
                </tr>
                <tr>
                    <td>Nama Lembaga Mitra/Perusahaan:</td>
                    <td><input type="text" name="namaLembaga" placeholder="Untuk lomba, isikan dengan nama lomba"></td>
                </tr>
                <tr>
                    <td>Durasi Kegiatan:</td>
                    <td><input type="text" name="durasi" placeholder="cantumkan tanggal mulai dan selesai kegiatan"></td>
                </tr>
                <tr>
                    <td>Posisi di Perusahaan:</td>
                    <td><input type="text" name="posisi" placeholder="Wajib diisi untuk kegiatan MSIB"></td>
                </tr>
                <tr>
                    <td>Rincian Kegiatan:</td>
                    <td><textarea name="rincian" rows="3" placeholder="Tuliskan rincian kegiatan"></textarea></td>
                </tr>

                <tbody id="membangunDesaFields" style="display: none;">
                    <tr>
                        <td colspan="2" style="background-color: #ffffff; font-weight: bold;">Untuk Program Membangun Desa/Kuliah Kerja Nyata Tematik:</td>
                    </tr>
                    <tr>
                        <td>Sumber Pendanaan (jika ada):</td>
                        <td><input type="text" name="sumberPendanaan"></td>
                    </tr>
                    <tr>
                        <td>Jumlah Anggota:</td>
                        <td><input type="text" name="jumlahAnggota"></td>
                    </tr>
                    <tr>
                        <td>Nama Anggota:</td>
                        <td><textarea name="namaAnggota" rows="3" placeholder="Tuliskan nama-nama anggota"></textarea></td>
                    </tr>
                </tbody>

                <tbody id="pertukaranPelajarFields" style="display: none;">
                    <tr>
                        <td colspan="2" style="background-color: #ffffff; font-weight: bold;">Untuk Program Pertukaran Pelajar:</td>
                    </tr>
                    <tr>
                        <td>Jenis Pertukaran Pelajar:</td>
                        <td>
                            <select name="jenisPertukaran" required>
                                <option value="">Pilih Jenis Pertukaran</option>
                                <option value="Antar Prodi di Politeknik Negeri Batam">Antar Prodi di Politeknik Negeri Batam</option>
                                <option value="Antar Prodi pada Perguruan Tinggi yang berbeda">Antar Prodi pada Perguruan Tinggi yang berbeda</option>
                                <option value="Prodi sama pada Perguruan Tinggi yang berbeda">Prodi sama pada Perguruan Tinggi yang berbeda</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Program Studi Tujuan:</td>
                        <td><input type="text" name="prodiTujuan"></td>
                    </tr>
                    <tr>
                        <td>Mata Kuliah yang Diklaim:</td>
                        <td>
                            <ol id="mataKuliahList">
                                <li><input type="text" name="mataKuliah[]" placeholder="Kode/Nama/SKS"></li>
                            </ol>
                            <button type="button" onclick="addMataKuliah()">Tambah Mata Kuliah</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button type="submit">Kirim</button>
        </form>

        <script>
            // Fungsi untuk mengambil data dari server dan mengisi formulir
            function populateForm() {
                const nim_nik = '123456'; // Ganti dengan nilai NIM/NIK yang sesuai atau metode untuk mengambilnya
                fetch(`../function/proses-formulir.php?nim_nik=${nim_nik}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.error) {
                            alert(data.error);
                        } else {
                            document.querySelector('input[name="nama"]').value = data.nama_lengkap;
                            document.querySelector('input[name="nim"]').value = data.nim_nik;
                            document.querySelector('input[name="prodiAsal"]').value = data.id_prodi;
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }

            // Panggil fungsi untuk mengisi formulir saat halaman dimuat
            document.addEventListener('DOMContentLoaded', populateForm);
        </script>

        <script>
            function addMataKuliah() {
                const list = document.getElementById('mataKuliahList');
                const newItem = document.createElement('li');
                newItem.innerHTML = '<input type="text" name="mataKuliah[]" placeholder="Kode/Nama/SKS">';
                list.appendChild(newItem);
            }

            function toggleProgramSpecificFields() {
                const program = document.getElementById('program-dropdown').value;
                const membangunDesaFields = document.getElementById('membangunDesaFields');
                const pertukaranPelajarFields = document.getElementById('pertukaranPelajarFields');

                membangunDesaFields.style.display = (program === 'Membangun Desa / Kuliah Kerja Nyata Tematik') ? '' : 'none';
                pertukaranPelajarFields.style.display = (program === 'Pertukaran Pelajar') ? '' : 'none';
            }

            document.getElementById('merdekaBelajarForm').addEventListener('submit', function(event) {
                event.preventDefault();
                alert('Formulir berhasil disubmit!');
            });
        </script>

        <script>
            function toggleDropdown() {
                const dropdown = document.getElementById("dropdownMenu");
                dropdown.classList.toggle("show");
            }

            window.onclick = function(event) {
                if (!event.target.matches(".profile-icon img")) {
                    const dropdown = document.getElementById("dropdownMenu");
                    if (dropdown.classList.contains("show")) {
                        dropdown.classList.remove("show");
                    }
                }
            };

            function activateMenu(element) {
                document.querySelectorAll(".sidebar nav a").forEach((menu) => {
                    menu.classList.remove("active");
                });
                element.classList.add("active");
            }
        </script>
        <script>
            document.getElementById('merdekaBelajarForm').addEventListener('submit', function(event) {
                const program = document.querySelector('select[name="program"]').value;
                if (!program) {
                    alert('Pilih program terlebih dahulu.');
                    event.preventDefault();
                }
            });
        </script>
</body>

</html>