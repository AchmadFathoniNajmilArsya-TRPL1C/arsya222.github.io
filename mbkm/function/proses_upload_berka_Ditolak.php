<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uploadDir = 'uploads/';
    $response = "";

    // Cek apakah folder uploads ada, jika tidak buat folder tersebut
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Proses upload Transkrip Nilai
    if (isset($_FILES['transkrip_nilai']) && $_FILES['transkrip_nilai']['error'] === UPLOAD_ERR_OK) {
        $transkripPath = $uploadDir . basename($_FILES['transkrip_nilai']['name']);
        if (move_uploaded_file($_FILES['transkrip_nilai']['tmp_name'], $transkripPath)) {
            $response .= "Transkrip Nilai berhasil diunggah.<br>";
        } else {
            $response .= "Gagal mengunggah Transkrip Nilai.<br>";
        }
    }

    // Proses upload Dokumen MBKM
    if (isset($_FILES['dokumen_mbkm']) && $_FILES['dokumen_mbkm']['error'] === UPLOAD_ERR_OK) {
        $mbkmPath = $uploadDir . basename($_FILES['dokumen_mbkm']['name']);
        if (move_uploaded_file($_FILES['dokumen_mbkm']['tmp_name'], $mbkmPath)) {
            $response .= "Dokumen MBKM berhasil diunggah.<br>";
        } else {
            $response .= "Gagal mengunggah Dokumen MBKM.<br>";
        }
    }

    // Menampilkan pesan hasil upload
    echo $response;
}
?>
