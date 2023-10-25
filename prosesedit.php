<?php
include("config.php");

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $sekolah_asal = $_POST['sekolah_asal'];

    $query = pg_query("UPDATE calonsiswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', sekolah_asal='$sekolah_asal' WHERE id='$id'");
    if ($query) {
        header('Location: index.php');
    } else {
        echo "Gagal update data";
    }
}
?>
