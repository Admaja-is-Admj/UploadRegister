<?php
    require 'functions.php';
    if (isset($_POST['submit'])) {
        var_dump($_POST);
        var_dump($_FILES);
        die();
    }
?>

<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <title>Tambah data</title>
    </head>
    <body>
        <form action="" method="POST" role="form">
            <legend class="text-center">Tambah data mahasiswa</legend>
                <div class="form-group">
                <label for="Nama">Nama:</label>
                <input type="text" class="form-control" id="" placeholder="Input field">
                </div>
                <div class="form-group">
                <label for="Nim">NIM: </label>
                <input type="text" class="form-control" id="" placeholder="input field">
                </div>
                <div class="form-group">
                <label for="Email">Email: </label>
                <input type="email" name="" id="input" class="form-control" value="" required="required" title="">
                </div>
                <div class="form-group">
                <label for="Jurusan">Jurusan : </label>
                <input type="text" class="form-control" id="" placeholder="input field">
                </div>
                <div class="form-group">
                <label for="Gambar">Gambar : </label>
                <input type="text" class="form-control" id="" placeholder="input field">
                </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </body>
</html>