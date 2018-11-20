<?php
    $conn=mysqli_connect("localhost","root","","phpdatabase");

    if(isset($_POST['submit'])){
        $nama=$_POST["Nama"];
        $nim=$_POST["Nim"];
        $email=$_POST["Email"];
        $jurusan=$_POST["Jurusan"];
        $gambar=$_POST["Gambar"];

        $query= "INSERT INTO mahasiswa
                    VALUES ('','$nama','$nim','$email','$jurusan','$gambar')";
        mysqli_query($conn,$query);

        if(mysqli_affected_rows($conn) > 0){
            echo "Data berhasil disimpan";
        } else {
            echo "gagal!";
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
        <title>Tambah data</title>
    </head>
    <body>
        <h1 class="text-center">Hello World</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="Nama">Nama</label>
                    <input type="text" name="Nama" id="Nama">
                </li>
                <li>
                    <label for="Nim">NIM</label>
                    <input type="text" name="Nim" id="Nim">
                </li>
                <li>
                    <label for="Email">Email</label>
                    <input type="text" name="Email" id="Email">
                </li>
                <li>
                    <label for="Jurusan">Jurusan</label>
                    <input type="text" name="Jurusan" id="Jurusan">
                </li>
                <li>
                    <label for="Gambar">Gambar</label>
                    <input type="text" name="Gambar" id="Gambar">
                </li>
                <li>
                    <button type="submit" name="submit"> Tambah </button>
                </li>
            </ul>
        </form>
    </body>
</html>