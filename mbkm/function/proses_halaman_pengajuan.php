<?php
// Contoh data untuk riwayat pengajuan (bisa diubah ke database)
$riwayatPengajuan = [
    [
        'nim' => '5454544656',
        'nama' => 'Budi',
        'program_studi' => 'TRPL',
        'tanggal_pengajuan' => '15/10/2024',
        'status_pengajuan' => 'Menunggu persetujuan',
        'status_berkas' => '',
        'aksi' => [
            'ubah' => true,
            'batal' => true,
        ],
    ],
    [
        'nim' => '5454544656',
        'nama' => 'Budi',
        'program_studi' => 'TRPL',
        'tanggal_pengajuan' => '15/10/2024',
        'status_pengajuan' => 'Diterima',
        'status_berkas' => 'Anda belum meng-upload berkas akhir',
        'aksi' => [
            'upload' => true,
        ],
    ],
    [
        'nim' => '5454544656',
        'nama' => 'Budi',
        'program_studi' => 'TRPL',
        'tanggal_pengajuan' => '15/10/2024',
        'status_pengajuan' => 'Ditolak',
        'status_berkas' => '',
        'aksi' => [],
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pengajuan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Riwayat Pengajuan</h1>
        <button type="button" class="btn btn-primary mb-3">Tambah Pengajuan</button>
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Status Pengajuan</th>
                    <th>Status Berkas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($riwayatPengajuan as $pengajuan): ?>
                    <tr>
                        <td><?= htmlspecialchars($pengajuan['nim']); ?></td>
                        <td><?= htmlspecialchars($pengajuan['nama']); ?></td>
                        <td><?= htmlspecialchars($pengajuan['program_studi']); ?></td>
                        <td><?= htmlspecialchars($pengajuan['tanggal_pengajuan']); ?></td>
                        <td>
                            <button class="btn btn-<?= $pengajuan['status_pengajuan'] === 'Diterima' ? 'success' : ($pengajuan['status_pengajuan'] === 'Ditolak' ? 'danger' : 'warning'); ?>">
                                <?= htmlspecialchars($pengajuan['status_pengajuan']); ?>
                            </button>
                        </td>
                        <td><?= htmlspecialchars($pengajuan['status_berkas']); ?></td>
                        <td>
                            <?php if (!empty($pengajuan['aksi']['ubah'])): ?>
                                <button class="btn btn-warning">Ubah</button>
                            <?php endif; ?>
                            <?php if (!empty($pengajuan['aksi']['batal'])): ?>
                                <button class="btn btn-danger">Batal</button>
                            <?php endif; ?>
                            <?php if (!empty($pengajuan['aksi']['upload'])): ?>
                                <button class="btn btn-primary">Upload Berkas Akhir</button>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script>
        new DataTable('#example');
    </script>
</body>
</html>
