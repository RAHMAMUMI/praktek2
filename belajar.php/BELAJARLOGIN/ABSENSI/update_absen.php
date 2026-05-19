<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];

mysqli_query($conn, "UPDATE absensi SET 
    nama='$nama',
    tanggal='$tanggal'
    WHERE id='$id'
");

header("Location: tampil_absen.php");
?>
