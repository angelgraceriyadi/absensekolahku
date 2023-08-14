<?php

    include "../config/koneksi.php";

    $id_gedung = $_GET['id_gedung'];
    mysqli_query($koneksi, "DELETE FROM gedung WHERE id_gedung='$id_gedung'") or die (mysqli_query($koneksi));

    header("location:../gedung/data-gedung.php?pesan=hapusberhasil");

?>