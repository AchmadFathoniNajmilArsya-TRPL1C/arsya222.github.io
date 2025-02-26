<?php
include '../function/koneksi.php'; // Menghubungkan dengan file koneksi

// Query untuk menghitung jumlah pengajuan per NIM
$sql_count = "SELECT nim/nik , COUNT(*) AS TotalPengajuan
              FROM pengajuan_usulan
              GROUP BY nim/nik,
              ORDER BY nim/nik";

$result_count = $conn->query($sql_count);

// Menyimpan hasil dalam array
$data_count = [];
if ($result_count->num_rows > 0) {
    while ($row = $result_count->fetch_assoc()) {
        $data_count[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rekap Pengajuan</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
  <h2 class="mb-4">Rekap Jumlah Pengajuan</h2>
  
  <div class="table-responsive">
    <table class="table table-striped table-hover">
      <thead class="table-dark">
        <tr>
          <th>NIM</th>
          <th>Nama</th>
          <th>Prodi</th>
          <th>Total Pengajuan</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // Menampilkan data dari hasil query
        foreach ($data_count as $row) {
            echo "<tr>
                    <td>{$row['NIM']}</td>
                    <td>{$row['Nama']}</td>
                    <td>{$row['Prodi']}</td>
                    <td>{$row['TotalPengajuan']}</td>
                  </tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

