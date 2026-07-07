<?php
require 'fungsi.php';

if (!isset($_GET['id'])) {
    header("Location: mahasiswa.php");
    exit;
}

$id = $_GET['id'];

$data = tampildata("SELECT * FROM mahasiswa WHERE id='$id'");

if (count($data) == 0) {
    die("Data tidak ditemukan!");
}

$data = $data[0];

if (isset($_POST["submit"])) {

    if (editdata($_POST) > 0) {
        echo "<script>
                alert('Data berhasil diedit!');
                document.location.href='mahasiswa.php';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal diedit!');
                document.location.href='mahasiswa.php';
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="data.css">
</head>
<body>

<div class="container">

<h2 align="center">Edit Data Mahasiswa</h2>

<form action="" method="post" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?= $data['id']; ?>">
    <input type="hidden" name="foto_lama" value="<?= $data['foto']; ?>">

    <p>
        <label>Nama</label><br>
        <input type="text" name="nama" value="<?= $data['nama']; ?>" required>
    </p>

    <p>
        <label>NIM</label><br>
        <input type="text" name="nim" value="<?= $data['nim']; ?>" required>
    </p>

    <p>
        <label>Jurusan</label><br>
        <input type="text" name="jurusan" value="<?= $data['prodi']; ?>" required>
    </p>

    <p>
        <label>Email</label><br>
        <input type="email" name="email" value="<?= $data['email']; ?>">
    </p>

    <p>
        <label>No HP</label><br>
        <input type="text" name="nohp" value="<?= $data['no_hp']; ?>">
    </p>

    <p>
        <label>Foto Saat Ini</label><br>

        <?php if ($data['foto'] != "") { ?>
            <img src="img/<?= $data['foto']; ?>" width="120">
        <?php } else { ?>
            Belum ada foto.
        <?php } ?>
    </p>

    <p>
        <label>Ganti Foto</label><br>
        <input type="file" name="foto">
    </p>

    <button type="submit" name="submit">Simpan</button>

</form>

</div>

</body>
</html>