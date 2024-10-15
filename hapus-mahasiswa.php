<?php
include('koneksi.php');

// Pastikan $id diambil dari GET request dan aman
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($connection, $_GET['id']);
    
    // Query untuk menghapus data mahasiswa
    $query = "DELETE FROM mahasiswa WHERE nim = '$id'";

    // Eksekusi query
    if (mysqli_query($connection, $query)) {
        // Redirect ke halaman index.php setelah berhasil
        header("Location: index.php");
        exit();
    } else {
        // Tampilkan pesan error jika query gagal
        echo "Error: " . mysqli_error($connection);
    }
} else {
    echo "ID tidak ditemukan.";
}

// Tutup koneksi
mysqli_close($connection);
?>