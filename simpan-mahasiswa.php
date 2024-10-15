<?php
// Include file koneksi database
include('koneksi.php');

// Get data dari form
$nim = $_POST["nim"];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

// Query insert data ke dalam database
$query = "INSERT INTO mahasiswa (nim, nama_mahasiswa, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat) 
          VALUES ('$nim', '$nama_mahasiswa', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$alamat')";

// Eksekusi query
if ($connection->query($query)) {
    // Redirect ke halaman index.php
    header("location: index.php");
} else {
    // Tampilkan pesan error
    echo "Data Gagal Disimpan!";
}
?>