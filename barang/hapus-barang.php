<?php

    include "../config/koneksi.php";

    $id_barang = $_GET['id_barang'];
    mysqli_query($koneksi, "DELETE FROM barang WHERE id_barang='$id_barang'") or die (mysqli_query($koneksi));

    header("location:../barang/data-barang.php?pesan=hapusberhasil");

?>