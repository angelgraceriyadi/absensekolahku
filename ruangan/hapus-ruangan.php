<?php

    include "../config/koneksi.php";

    $id_ruangan = $_GET['id_ruangan'];
    mysqli_query($koneksi, "DELETE FROM ruangan WHERE id_ruangan='$id_ruangan'") or die (mysqli_query($koneksi));

    header("location: ../ruangan/data-ruangan.php?pesan=hapusberhasil");

?>