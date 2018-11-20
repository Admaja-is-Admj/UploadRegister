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

<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="registrasi.php">registrasi</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
        </ul>
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>

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
    
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="cool">No. </th>
                <th scope="cool">Nama </th>
                <th scope="cool">Nim </th>
                <th scope="cool">Email </th>
                <th scope="cool">Jurusan </th>
                <th scope="cool">Gambar </th>
                <th scope="cool">Aksi </th>
                </tr>
        </thead>
        <tbody>
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
        </tbody>
    </table>
</body>
</html>