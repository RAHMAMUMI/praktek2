<?php
include 'koneksi.php';
?>

<h2>Data Absensi</h2>
<a href="absen.php">+ Tambah</a><br><br>

<table border="1">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Tanggal</th>
    <th>Keterangan</th>
    <th>Aksi</th>
</tr>

<?php
$no = 1;
$data = mysqli_query($conn, "SELECT * FROM absensi");

while ($d = mysqli_fetch_array($data)) {
?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $d['nama']; ?></td>
    <td><?= $d['tanggal']; ?></td>
    <td><?= $d['keterangan']; ?></td>
    <td>
        <a href="edit_absen.php?id=<?= $d['id']; ?>">Edit</a> |
        <a href="hapus_absen.php?id=<?= $d['id']; ?>">Hapus</a>
    </td>
</tr>
<?php } ?>

</table>
