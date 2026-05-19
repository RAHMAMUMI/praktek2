<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>

<head>

<title>Dashboard Volleyball Club</title>

<style>

body{
    margin:0;
    padding:20px;

    font-family:Poppins,sans-serif;

    text-align:center;

    background:
    url('bg1.png') center center no-repeat,
    linear-gradient(to bottom right,#eef8ff,#dff1ff);

    background-size:cover;

    background-attachment:fixed;

    min-height:100vh;
}

/* STIKER */

.stiker1{

position:fixed;
left:20px;
top:20px;
font-size:40px;

}

.stiker2{

position:fixed;
right:20px;
top:20px;
font-size:40px;

}

.stiker3{

position:fixed;
left:20px;
bottom:20px;
font-size:40px;

}

.stiker4{

position:fixed;
right:20px;
bottom:20px;
font-size:40px;

}

h1{

color:#1f7ed6;
font-size:45px;

}

h2{

color:#3b9cff;

}

.card{

display:inline-block;

background:#eef7ff;

padding:20px;

margin:15px;

border-radius:25px;

box-shadow:0 0 15px rgba(0,0,0,0.1);

}

.foto{

width:120px;
height:120px;

border-radius:20px;

object-fit:cover;

border:4px solid #8ecbff;

}

button{

padding:12px 20px;

border:none;

border-radius:15px;

background:#4db2ff;

color:white;

cursor:pointer;

margin-top:10px;

font-size:15px;

}

button:hover{

background:#259dff;

}

table{

width:95%;

    margin:auto;

    margin-top:25px;

    border-collapse:collapse;

    overflow:hidden;

    border-radius:25px;

    background:rgba(255,255,255,0.85);

    backdrop-filter:blur(5px);

    box-shadow:0 8px 18px rgba(0,0,0,0.08);
}
th{

background:linear-gradient(to right,#5ec8ff,#268dff);

    color:white;

    padding:16px;

    font-size:17px;
}

td{

padding:12px;

text-align:center;

background:#f5fbff;

}

a{

text-decoration:none;

color:#1f7ed6;

font-weight:bold;

}

.deskripsi{

width:70%;
margin:auto;

}

</style>

</head>

<body>

<div class="stiker1">
🏐 ✨ ☁️
</div>

<div class="stiker2">
💙 🏐 ✨
</div>


<h1>🏐 VOLLEYBALL CLUB</h1>

<h2>SMKN 2 BALEENDAH 💙</h2>

<a href="logout.php">
<button>Logout</button>
</a>

<br><br>

<div class="card">
<img src="pembina.jpg" class="foto">
<h3>Bapak Irvan Maulana, S.Pd</h3>
<p>🏐 Pembina Voli</p>
</div>

<div class="card">
<img src="ketua.jpg" class="foto">
<h3>Aldi Permana Suryadi</h3>
<p>⚪ Ketua Voli</p>
</div>

<div class="card">
<img src="sekertaris.jpg" class="foto">
<h3>Asyifa Nurul Damayanti</h3>
<p>⚪ Sekretaris Voli</p>
</div>

<div class="card">
<img src="bendahara.jpg" class="foto">
<h3>Salwa Nurul Syifa</h3>
<p>⚪ Bendahara Voli</p>
</div>

<br><br>

<div class="card deskripsi">

<h3>🏐 Tentang Ekstrakurikuler Voli</h3>

<p> 
“Great teams are built with passion, discipline, and teamwork.” 🏐💙

<br><br>

Volleyball Club SMKN 2 Baleendah menjadi tempat berkembangnya semangat, kebersamaan, dan prestasi siswa dalam dunia olahraga voli.

<p>
📷 Instagram :
<a href="https://www.instagram.com/volleybe2?igsh=NnFveWZhajJnbG81" target="_blank">
@volleybe2
</a>
</p>

<p>
📞 Contact Ketua : (Kang Aldi) 
<a href="https://wa.me/62895804820800" target="_blank">
+62 895-8048-20800
</a>
</p>

</div>

<br><br>

<a href="tambah.php">
<button class="tambah">➕ Tambah Anggota</button>
</a>

<table border="1">

<tr>

<th>⚪ No</th>
<th>💙 Nama</th>
<th>✨ Kelas</th>
<th>👦🏻👧🏻 Jenis Kelamin</th>
<th>⚪ Posisi</th>
<th>👑 Jabatan</th>
<th>🏠 Alamat</th>
<th>🌸 Aksi</th>

</tr>

<?php

$no = 1;

$data = mysqli_query($conn, "SELECT * FROM anggota");

while($d = mysqli_fetch_array($data)){

?>

<tr>

<td><?php echo $no++; ?></td>

<td><?php echo $d['nama']; ?></td>

<td><?php echo $d['kelas']; ?></td>

<td><?php echo $d['jenis_kelamin']; ?></td>

<td><?php echo $d['posisi']; ?></td>

<td><?php echo $d['jabatan']; ?></td>

<td><?php echo $d['alamat']; ?></td>

<td>

<a href="edit.php?id=<?php echo $d['id']; ?>">
✏️ Edit
</a>

|

<a href="hapus.php?id=<?php echo $d['id']; ?>">
🗑️ Hapus
</a>

</td>

</tr>

<?php } ?>

</table>
<br><br>

<div class="footer">
   © Volleyball Club SMKN 2 Baleendah 💙🏐
</div>

</body>
</html>