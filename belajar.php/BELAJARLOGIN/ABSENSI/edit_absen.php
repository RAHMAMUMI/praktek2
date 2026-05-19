<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM absensi WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<h2>Edit Data</h2>

<form method="POST" action="update_absen.php">
    <input type="hidden" name="id" value="<?= $d['id']; ?>">

    Nama: <input type="text" name="nama" value="<?= $d['nama']; ?>"><br><br>
    Tanggal: <input type="date" name="tanggal" value="<?= $d['tanggal']; ?>"><br><br>

    <button type="submit">Update</button>
</form>
