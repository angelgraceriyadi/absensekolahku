<?php

    include "../config/koneksi.php";
    if (isset($_POST['ubah_ruangan']))
    {
        $id_ruangan = $_POST['a'];
        $id_gedung = $_POST['b'];
        $nama_ruangan = $_POST['c'];
        
        // script update
        $update= mysqli_query($koneksi, "UPDATE ruangan
        SET id_ruangan='$id_ruangan', id_gedung='$id_gedung', nama_ruangan='$nama_ruangan'
        WHERE id_ruangan='$id_ruangan'") or die(mysqli_error($koneksi));
    }

    if ($update)
    {
        header("location: data-ruangan.php?pesan=Berhasil");
        exit();
    } else {
        header("location: data-ruangan.php?pesan=Gagal");
        exit();
    }
?>