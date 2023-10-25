<!DOCTYPE html>
<html>
<head>
    <title>Form Edit Siswa | SMK Coding</title>
</head>
<body>

    <?php
    include 'config.php';
    $id = $_GET['id'];
    $query = pg_query("SELECT * FROM calonsiswa WHERE id='$id'");
    $siswa = pg_fetch_array($query);
    ?>

    <h3>Form Edit Siswa</h3>

    <form action="prosesedit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>">
        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?php echo $siswa['nama'] ?>"><br>
        <label>Alamat:</label><br>
        <input type="text" name="alamat" value="<?php echo $siswa['alamat'] ?>"><br>
        <label>Jenis Kelamin:</label><br>
        <input type="text" name="jenis_kelamin" value="<?php echo $siswa['jenis_kelamin'] ?>"><br>
        <label>Sekolah Asal:</label><br>
        <input type="text" name="sekolah_asal" value="<?php echo $siswa['sekolah_asal'] ?>"><br><br>
        <input type="submit" name="edit" value="Edit Data">
    </form>

</body>
</html>
