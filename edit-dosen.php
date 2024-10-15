<?php
include('koneksi.php');
$id = $_GET['id'];
$query = "SELECT * FROM dosen WHERE nidn = $id LIMIT 1";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
?>

<!doctype html>
<html Lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink- to-fit=no">
        <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css
        ">
        <title>Edit Dosen</title>
    </head> 
<body>
<div class="container" style="margin-top: 80px"> 
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                EDIT DOSEN
                </div>
                <div class="card-body">
                    <form action="update-dosen.php" method="POST">

                        <div class="form-group">
                            <label>NIDN</label>
                            <input type="text" name="nidn" value="<?php echo $row['nidn'] ?>" 
                            placeholder="Masukkan NIDN Dosen" class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <label>Nama Dosen</label>
                            <input type="text" name="nama_dosen" value="<?php echo $row['nama_dosen'] ?>"
                            placeholder="Masukkan Nama Dosen" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" value="<?php echo $row['tempat_lahir']?>" placeholder="Masukkan Tempat Lahir Dosen" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir'] ?>"
                            placeholder="Masukkan Tanggal Lahir Dosen" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            
                            <div class="form control">
                                <input type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo ($row['jenis_kelamin'] == "Laki-laki") ? "checked" : ""; ?>> Laki-laki
                                <input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($row['jenis_kelamin'] == "Perempuan") ? "checked" : ""; ?>> Perempuan
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat
                            Dosen" rows="4"><?php
                            echo $row['alamat'] ?></textarea>
                        </div>

                        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                        <button type="reset" class="btn btn-warning">Reset</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script
src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
</script>
</body>
</html>