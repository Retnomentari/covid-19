<?php

    include '../config.php';

    $id_pasien = $_GET['id_pasien'];

    $query = "DELETE FROM t_pasien WHERE id_pasien = $id_pasien";

    $hasil = mysqli_query($koneksi, $query);

    $cek = mysqli_affected_rows($koneksi);

    if($cek == 1)
    {
        header("Location: tampil.php");
    }
    else {
        echo "Gagal menghapus data";
    }

?>
