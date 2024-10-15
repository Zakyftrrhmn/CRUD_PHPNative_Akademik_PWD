<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-
        to-fit=no">
        <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css ">
        <link rel="stylesheet"
        href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
        <title>Data Mahasiswa</title>
    </head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Mahasiswa</div>
                    <div class="card-body">
                        <a href="" class="btn btn-md btn-success">Tambah Mahasiswa</a>
                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">NO.</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">NAMA MAHASISWA</th>
                                    <th scope="col">TEMPAT LAHIR</th>
                                    <th scope="col">TANGGAL LAHIR</th>
                                    <th scope="col">JENIS KELAMIN</th>
                                    <th scope="col">ALAMAT</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">DATA MAHASISWA</div>
                    <div class="card-body">
                        <a href="tambah-mahasiswa.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
                        <table class="table table-bordered" id="myTable">
                                <thead>
                                    <tr>
                                        <th scope="col">NO.</th>
                                        <th scope="col">NIM</th>
                                        <th scope="col">NAMA MAHASISWA</th>
                                        <th scope="col">TEMPAT LAHIR</th>
                                        <th scope="col">TANGGAL LAHIR</th>
                                        <th scope="col">JENIS KELAMIN</th>
                                        <th scope="col">ALAMAT</th>
                                        <th scope="col">AKSI</th>
                                    </tr>
                                </thead>

                                <tbody>
                                <?php
                                include('koneksi.php');
                                $no = 1;
                                $query= mysqli_query($connection, "SELECT * FROM mahasiswa");
                                while($row = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $row['nim'] ?></td>
                                        <td><?php echo $row['nama_mahasiswa'] ?></td>
                                        <td><?php echo $row['tempat_lahir'] ?></td>
                                        <td><?php echo $row['tanggal_lahir'] ?></td>
                                        <td><?php echo $row['jenis_kelamin'] ?></td>
                                        <td><?php echo $row['alamat'] ?></td>
                                        <td class="text-center d-flex justify-content-center align-items-center">
                                            <a href="edit-mahasiswa.php?id=<?php echo $row['nim'] ?>" class="btn btn-sm 
                                            btn-link mr-1">Edit</a>
                                            <a href="hapus-mahasiswa.php?id=<?php echo $row['nim'] ?>" class="btn btn-sm 
                                            btn-link">Hapus</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function () {
$('#myTable'). DataTable();
});
</script>

</body>
</html>