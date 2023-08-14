<?php

    include "../config/koneksi.php";
    if (isset($_POST['ubah_gedung']))
    {
        $id_gedung = $_POST['a'];
        $nama_gedung = $_POST['b'];
        $kondisi_gedung = $_POST['c'];
        
        // script update
        $update= mysqli_query($koneksi, "UPDATE gedung
        SET id_gedung='$id_gedung', nama_gedung='$nama_gedung', kondisi_gedung='$kondisi_gedung'
        WHERE id_gedung='$id_gedung'") or die(mysqli_error($koneksi));
    }

    if ($update)
    {
        header("location: ../gedung/data-gedung.php?pesan=Berhasil");
        exit();
    } else {
        header("location: ../gedung/data-gedung.php?pesan=Gagal");
        exit();
    }
?>