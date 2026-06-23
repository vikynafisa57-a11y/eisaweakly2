<?php
$koneksi = mysqli_connect("localhost", "root", "", "eisaweekly");

$query = "SELECT * FROM mahasiswa";

$result = mysqli_query($koneksi, $query);

/// ambil data (fetch) dari mahasiswa
/// mysqli_fetch_array bisa numeric dan assos
/// mysqli_fetch_assoc bisa assos
/// mysqli_fetch_row bisa numeric
/// mysqli_fetch_object 


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

<table border="1px" align="center" cellspacing="0" cellpadding="10px">
<tr> 
    
</tr>
<tr>
    <th>NO</th>
    <th>Nama</th>
    <th>NIM</th>
    <th>Prodi</th>
    <th>email</th>
    <th>Nomor wa</th>
    <th>Foto</th>
    <th>aksi</th>

</tr>

<?php

while($mhs = mysqli_fetch_assoc($result))
    {

    

?>
<tr>
    <td>1</td>
    <td><?php echo $mhs["nama"] ?></td>
    <td><?php echo $mhs["nim"] ?> </td>
    <td><?=  $mhs["prodi"] ?></td>
    <td> <?= $mhs["email"] ?></td>
    <td>068363596226</td>
    <td><img src="eisa.jpeg" width="50px"></td>
    <td>
        <a href="editdata.php"><button>Edit</button></a> |
        <a href="delatedata.php"><button>Hapus</button></a>
    </td>
</tr>
</table>
<br><br>
<h2>Data Mahasiswa</h2>
<a href="data.php"><button>Tambah Data</button></a>
<table border="1" cellpadding="5px">
<tr>

<?php
    }
?>
    </body>
</html>