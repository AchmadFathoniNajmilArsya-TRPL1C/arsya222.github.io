<?php
$host = 'localhost';       // Host database
$username = 'root';        // Username default untuk XAMPP
$password = '';            // Password default untuk XAMPP biasanya kosong
$database = 'nama_database'; // Ganti dengan nama database Anda

$conn = mysqli_connect("localhost", "root", "", "mbkm");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>
