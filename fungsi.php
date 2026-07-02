<?php

    $koneksi = mysqli_connect("localhost", "root", "", "eisaweekly");

    function tampildata($query)
    {
        global $koneksi;

         $result = mysqli_query($koneksi, $query);

        $rows = [];
        while($row = mysqli_fetch_assoc($result))
            {
                $rows[] = $row;
            }

            return $rows;
    }

    function hapusdata($id)
    {
        global $koneksi;
           $query = "DELETE FROM mahasiswa WHERE id = $id";

            mysqli_query($koneksi, $query);

            return mysqli_affected_rows($koneksi);
    }
?>