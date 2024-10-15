<?php
// Include file koneksi database
include('koneksi.php');

// Get data dari form
$nidn = $_POST["nidn"];
$nama_dosen = $_POST['nama_dosen'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

// Query insert data ke dalam database
$query = "INSERT INTO dosen (nidn, nama_dosen, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat) 
          VALUES ('$nidn', '$nama_dosen', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$alamat')";

// Eksekusi query
if ($connection->query($query)) {
    // Redirect ke halaman index.php
    header("location: index-dosen.php");
} else {
    // Tampilkan pesan error
    echo "Data Gagal Disimpan!";
}
?>