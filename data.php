<?php
require 'fungsi.php';

if(isset($_POST["submit"])){

    if(tambahdata($_POST) > 0){
        echo "<script>
                alert('Data berhasil ditambahkan!');
                document.location.href='index.php';
              </script>";
    }else{
        echo "<script>
                alert('Data gagal ditambahkan!');
              </script>";

        echo mysqli_error($koneksi);
    }

}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Mahasiswa</title>
    <link rel="stylesheet" href="data.css">
</head>
<body>

<div class="container">
    <h2>Form Data Mahasiswa</h2>

    <form action="" method="post">
        <div class="row">
            <label>Nama</label>
            <input type="text" name="nama" id="nama" placeholder="Masukkan Nama" required>
        </div>

        <div class="row">
            <label>NIM</label>
            <input type="text" name="nim" id="nim" placeholder="Masukkan NIM" required>
        </div>

        <div class="row">
            <label>Jurusan</label>
            <input type="text" name="jurusan" id="jurusan" placeholder="Masukkan Jurusan" required>
        </div>

        <div class="row">
            <label>Email</label>
            <input type="email" name="email" id="email" placeholder="Masukkan Email">
        </div>

        <div class="row">
            <label>No HP</label>
            <input type="text" name="nohp" id="nohp" placeholder="08xxxxxxxxxx">
        </div>

        <div class="row">
            <label>Foto</label>
            <input type="text" name="foto" id="foto" placeholder="Masukkan nama file foto">
        </div>

        <button class="submit-btn" type="submit" name="submit">
            Submit
        </button>
    </form>
</div>

</body>
</html>