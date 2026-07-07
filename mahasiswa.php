<?php
    require "fungsi.php";

    $query = "SELECT * FROM mahasiswa";

    $mahasiswa = tampildata($query); ///wadah isi data

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="student.css">
</head>
<body>

<h1 class="judul">Web TI Eisa | 26</h1>

<nav class="navbar">
    <a href="index.php">Profil</a>
    <a href="about.php">About Me</a>
    <a href="kontak.php">Contact</a>
    <a href="student.php">Data Mahasiswa</a>
</nav>

<h2 align="center">Data Mahasiswa</h2>

<table border="1" align="center" cellspacing="0" cellpadding="10">
    <tr>
        <th>NO</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Prodi</th>
        <th>Email</th>
        <th>Nomor WA</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>

    <?php
    $no = 1;
    foreach($mahasiswa as $mhs)
        {
    ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $mhs["nama"]; ?></td>
            <td><?= $mhs["nim"]; ?></td>
            <td><?= $mhs["prodi"]; ?></td>
            <td><?= $mhs["email"]; ?></td>
            <td><?= $mhs["no_hp"]; ?></td>
            <td>
                <img src="img/<?= $mhs['foto']; ?>" width="50">
            </td>
            <td>
                <a href="editdata.php?id=<?= $mhs['id']; ?>">
    <button>Edit</button>
</a>
                |
                <a href="hapusdata.php?id=<?= $mhs["id"] ?>" onclick="return confirm('Yakin Igin di Hapus?')">
                    <button>Hapus</button>
                </a>
            </td>
        </tr>
    <?php
    
    }
    ?>
</table>

<br><br>

<div align="center">
    <a href="data.php">
        <button>Tambah Data</button>
    </a>
</div>

</body>
</html>