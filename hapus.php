<?php

include("config.php");

if( isset($_GET['id_siswa']) ){

    // ambil id dari query string
    $id = $_GET['id_siswa'];

    // buat query hapus
    $sql = "DELETE FROM calon_siswa WHERE id_siswa=$id";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list-siswa.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>