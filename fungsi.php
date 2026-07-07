<?php

$koneksi = mysqli_connect("localhost", "root", "", "eisaweekly");

if (!$koneksi) {
    die("Koneksi gagal : " . mysqli_connect_error());
}

// ================== TAMPIL DATA ==================
function tampildata($query)
{
    global $koneksi;

    $result = mysqli_query($koneksi, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// ================== TAMBAH DATA ==================
function tambahdata($data)
{
    global $koneksi;

    $nama   = htmlspecialchars($data["nama"]);
    $nim    = htmlspecialchars($data["nim"]);
    $prodi  = htmlspecialchars($data["jurusan"]);
    $email  = htmlspecialchars($data["email"]);
    $nohp   = htmlspecialchars($data["nohp"]);

    $foto = "";

    if (isset($_FILES["foto"]) && $_FILES["foto"]["error"] == 0) {

        $foto = time() . "_" . basename($_FILES["foto"]["name"]);
        $tmp  = $_FILES["foto"]["tmp_name"];

        move_uploaded_file($tmp, "img/" . $foto);
    }

    $query = "INSERT INTO mahasiswa
            (nama, nim, prodi, email, no_hp, foto)
            VALUES
            ('$nama','$nim','$prodi','$email','$nohp','$foto')";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

// ================== HAPUS DATA ==================
function hapusdata($id)
{
    global $koneksi;

    // hapus file foto
    $data = tampildata("SELECT foto FROM mahasiswa WHERE id='$id'");

    if ($data && $data[0]["foto"] != "") {
        $file = "img/" . $data[0]["foto"];

        if (file_exists($file)) {
            unlink($file);
        }
    }

    mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id='$id'");

    return mysqli_affected_rows($koneksi);
}

// ================== EDIT DATA ==================
function editdata($data)
{
    global $koneksi;

    $id     = $data["id"];
    $nama   = htmlspecialchars($data["nama"]);
    $nim    = htmlspecialchars($data["nim"]);
    $prodi  = htmlspecialchars($data["jurusan"]);
    $email  = htmlspecialchars($data["email"]);
    $nohp   = htmlspecialchars($data["nohp"]);

    // gunakan foto lama jika tidak upload foto baru
    $foto = $data["foto_lama"];

    if (isset($_FILES["foto"]) && $_FILES["foto"]["error"] == 0) {

        // hapus foto lama
        if ($foto != "" && file_exists("img/" . $foto)) {
            unlink("img/" . $foto);
        }

        $foto = time() . "_" . basename($_FILES["foto"]["name"]);
        $tmp  = $_FILES["foto"]["tmp_name"];

        move_uploaded_file($tmp, "img/" . $foto);
    }

    $query = "UPDATE mahasiswa SET
                nama='$nama',
                nim='$nim',
                prodi='$prodi',
                email='$email',
                no_hp='$nohp',
                foto='$foto'
              WHERE id='$id'";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

?>