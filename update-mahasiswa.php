<?php
//include koneksi database 
include('koneksi.php');

//get data dari form
$nim = $_POST['nim'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE mahasiswa SET nim = '$nim', nama_mahasiswa = '$nama_mahasiswa', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat' WHERE nim ='$nim'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php
header("location: index.php"); 
} else {

    //pesan error gagal update data
echo "Data Gagal Diupate!";
}
?>