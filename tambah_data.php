<?php
    require 'functions.php';
    if (isset($_POST['submit'])) {
        if(tambah($_POST)>0)
        {
            echo "
            <script>
                alert('Data Berhasil Disimpan');
                document.location.href='index.php';
            </script>

            ";
        }else{
            echo "
            <script>
                alert('Data Gagal Disimpan');
                document.location.href='tambah_data.php';
            </script>";
            echo "<br>";
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <title>Tambah data</title>
    </head>
    <body>

    <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <legend class="text-center">Tambah data mahasiswa</legend>
            </div>
            <div class="form-group">
                <label for="Nama">Nama:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Nama" required>
                </div>
            </div>
            <div class="form-group">
                <label for="Nim">NIM: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Nim" required>
                </div>
            </div>
            <div class="form-group">
                <label for="Email">Email: </label>
                <div class="col-sm-10">
                    <input type="email" name="" id="input" class="form-control" value="" required="required" title="">
                </div>
            </div>
            <div class="form-group">
                <label for="Jurusan">Jurusan : </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Jurusan" required>
                </div>
            </div>
            <div class="form-group">
                <label for="Gambar">Gambar : </label>
                <div class="col-sm-10">
                    <input type="file" name="Gambar" id="Gambar" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
    </form>

    </body>
</html>