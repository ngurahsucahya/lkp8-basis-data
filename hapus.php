<?php
include("config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

if (isset($_GET['confirm']) && $_GET['confirm'] === 'yes') {
    $query = pg_query("DELETE FROM calonsiswa WHERE id='$id'");
    if ($query) {
        header('Location: index.php');
    } else {
        echo "Gagal menghapus data";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Konfirmasi Penghapusan Siswa</title>
</head>
<body>

<h3>Konfirmasi Penghapusan Siswa</h3>

<p>Apakah Anda yakin ingin menghapus siswa ini?</p>
<a href="proses_delete.php?id=<?php echo $id; ?>&confirm=yes">Ya</a>
<a href="index.php">Tidak</a>

</body>
</html>
