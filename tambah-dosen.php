<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Dosen</title>
</head>
<body>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        TAMBAH DOSEN
                    </div>
                    <div class="card-body">
                        <form action="simpan-dosen.php" method="POST">
                            <div class="form-group">
                                <label for="nidn">NIDN</label>
                                <input type="text" id="nidn" name="nidn" placeholder="Masukan NIDN Dosen" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nama_dosen">Nama Dosen</label>
                                <input type="text" id="nama_dosen" name="nama_dosen" placeholder="Masukkan Nama Dosen" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir Dosen" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label><br>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="jenis_kelamin_laki" name="jenis_kelamin" value="Laki-laki" class="form-check-input">
                                    <label class="form-check-label" for="jenis_kelamin_laki">Laki-Laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="jenis_kelamin_perempuan" name="jenis_kelamin" value="Perempuan" class="form-check-input">
                                    <label class="form-check-label" for="jenis_kelamin_perempuan">Perempuan</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea id="alamat" class="form-control" name="alamat" placeholder="Masukkan Alamat Dosen" rows="4"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">SIMPAN</button>
                            <button type="reset" class="btn btn-warning">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>