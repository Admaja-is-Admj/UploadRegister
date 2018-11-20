<?php
require 'functions.php';
$mahasiswa=query("SELECT * FROM mahasiswa");
if(isset($_POST["cari"])){
    $mahasiswa = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <form action="" method="POST" class="form-horizontal" role="form">                
        <div class="form-group">
            <input type="text" name="keyword" id="input" 
            class="form-control" autofocus placehoder="Masukkan keyword pencarian" autocomplete="off">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary" name="cari">Cari</button>
                </div>
        </div>
    </form>
    
    <a href="tambah_data.php">Tambah Data Mahasiswa</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No. </th>
            <th>Nama </th>
            <th>Nim </th>
            <th>Email </th>
            <th>Jurusan </th>
            <th>Gambar </th>
            <th>Aksi </th>
        </tr>
        <?php $i=1 ?>
        <!-- kita buat contoh data static -->
        <?php foreach ($mahasiswa as $row):?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["Nama"]; ?></td>
            <td><?= $row["Nim"]; ?></td>
            <td><?= $row["Email"]; ?></td>
            <td><?= $row["Jurusan"]; ?></td>
            <td> <img src="image/<?php echo $row["Gambar"]; ?>" alt="" height="100" width="100" srcset=""></td>
            <td>
                <a href="Edit.php?id=<?php echo $row["id"];?>">Edit</a>
                <a href="hapus.php?id=<?php echo $row["id"]; ?>"onclick="return confirm('Apakah data ini akan dihapus?')">Hapus</a>
            </td>
        </tr>
    <?php $i++ ?>
    <?php endforeach;?>
    </table>
</body>
</html>