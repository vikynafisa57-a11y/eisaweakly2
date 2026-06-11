
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Mahasiswa</title>
<link rel="stylesheet" href="student.css">
</head>
<body>
<h1 align="center">
    web ti eisa 26
</h1>

<nav>
            <a href="index.php">Profil</a>
            <a href="about.php">About Me</a>
            <a href="kontak.php">Contact</a>
             <a href="student.php">Data Mahasiswa</a>
        </nav>

<table border="1px" align="center" cellspacing="0" cellpadding="10px">
<tr> 
    <td><a href="index.php" >Home</a></td>
    <td><a href="about.php">Profile</a></td>
    <td><a href="kontak.php">kontak</a></td>
    <td> <a href="student.php">Data Mahasiswa</a></td>
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

<tr>
    <td>1</td>
    <td>Viky Diana Nafisa</td>
    <td>1325272722</td>
    <td>Teknologi Informasi</td>
    <td> sasa@gmail.com</td>
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
    <td rowspan="2">Baris 1, Kolom 1</td>
    <td colspan="2">Baris 1, Kolom 2</td> <!----->
    <!-- <td>Baris 1, Kolom2</td> -->
</tr>
<tr> 
    <td>Baris 2, Kolom 1</td>
    <td>Baris 2, Kolom 2</td>
    <!-- <td>Baris 2, Kolom 3</td> -->
</tr>
</table>
<br><br>
<h2>Data Mahasiswa</h2>
<table border="1" cellpadding="10px">
<tr>
    <td >1,1</td>
    <td >1,2</td> 
    <td>1,3</td> 
    <td>1,4</td> 
</tr>
<tr> 
    <td>2,1</td>
    <td rowspan= "2" colspan="2"></td>
    <td>2,4</td> 
    </tr>
    
    <tr>
        <td>3,1</td>
        <td>3,2</td>
    </tr>

    <tr>
                <td >4,1</td>
    <td>4,2</td> 
    <td>4,3</td> 
    <td>4,4</td> 
    </tr>
</table>
</table>
</body>
</html>