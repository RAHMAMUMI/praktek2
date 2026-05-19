<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Absensi</title>
</head>
<body>
    <h2>Form Absensi</h2>

    <a href="tampil_absen.php">Lihat Data</a> |
    <a href="logout.php">Logout</a><br><br>

    <form method="POST" action="simpan_absen.php">
        Nama: <input type="text" name="nama"><br><br>
        Tanggal: <input type="date" name="tanggal"><br><br>
        Keterangan:
        <select name="keterangan">
            <option>Hadir</option>
            <option>Izin</option>
            <option>Sakit</option>
        </select><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
