<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$keterangan = $_POST['keterangan'];

mysqli_query($conn, "INSERT INTO absensi (nama, tanggal, keterangan) 
VALUES ('$nama', '$tanggal', '$keterangan')");

header("Location: tampil_absen.php");
?>

