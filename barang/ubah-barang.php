<?php

    include "../config/koneksi.php";
    if (isset($_POST['ubah_barang']))
    {
        $id_barang = $_POST['a'];
        $id_ruang = $_POST['b'];
        $kode_barang = $_POST['c'];
        $nama_barang = $_POST['d'];
        $thn_pengadaan = $_POST['e'];
        $jumlah = $_POST['f'];
        $kondisi = $_POST['g'];
        
        // script update
        $update= mysqli_query($koneksi, "UPDATE barang
        SET id_barang='$id_barang', id_ruangan='$id_ruang', kode_barang='$kode_barang', nama_barang='$nama_barang', thn_pengadaan='$thn_pengadaan', jumlah='$jumlah', kondisi='$kondisi'
        WHERE id_barang='$id_barang'") or die(mysqli_error($koneksi));
    }

    if ($update)
    {
        header("location: ../barang/data-barang.php?pesan=Berhasil");
        exit();
    } else {
        header("location: ../barang/data-barang.php?pesan=Gagal");
        exit();
    }
?>