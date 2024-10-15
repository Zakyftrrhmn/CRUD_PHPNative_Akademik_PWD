<?php
//include koneksi database 
include('koneksi.php');

//get data dari form
$nidn = $_POST['nidn'];
$nama_dosen = $_POST['nama_dosen'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE dosen SET nidn = '$nidn', nama_dosen = '$nama_dosen', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat' WHERE nidn ='$nidn'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php
header("location: index-dosen.php"); 
} else {

    //pesan error gagal update data
echo "Data Gagal Diupate!";
}
?>