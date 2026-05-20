<?php
include 'koneksi.php';

if(isset($_POST['tambah'])){

    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $posisi = $_POST['posisi'];
    $jabatan = $_POST['jabatan'];
    $alamat = $_POST['alamat'];

    mysqli_query($conn,"INSERT INTO anggota
(id, nama, kelas, posisi, jabatan, jenis_kelamin, alamat)

VALUES(
'',
'$nama',
'$kelas',
'$posisi',
'$jabatan',
'$jenis_kelamin',
'$alamat'
)");

    header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Tambah Anggota</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>

body{
    margin:0;
    padding:0;

    font-family:'Poppins',sans-serif;

    display:flex;
    justify-content:center;
    align-items:center;

    min-height:100vh;

    background-image:url('bg2.png');

    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;
}

.form-box{

    width:400px;

    background:rgba(255,255,255,0.92);

    padding:35px;

    border-radius:35px;

    text-align:center;

    box-shadow:0 10px 30px rgba(0,0,0,0.1);

    backdrop-filter:blur(5px);
}

h1{
    color:#248cff;
    margin-bottom:20px;
}

input,
select,
textarea{

    width:100%;

    padding:14px;

    margin-top:12px;

    border:none;

    border-radius:15px;

    background:#f4f9ff;

    font-size:15px;

    box-sizing:border-box;
}

textarea{
    resize:none;
    height:90px;
}

button{

    width:100%;

    padding:14px;

    margin-top:20px;

    border:none;

    border-radius:20px;

    background:linear-gradient(to right,#6ec6ff,#2b8cff);

    color:white;

    font-size:18px;

    font-weight:bold;

    cursor:pointer;

    transition:0.3s;
}

button:hover{
    transform:translateY(-3px);
}

</style>
</head>

<body>

<div class="form-box">

<h1>🏐 Tambah Anggota</h1>

<form method="POST"> action="">

<input type="text" name="nama" placeholder="Nama Lengkap" required>

<select name="kelas" required>

<option value="">-- Pilih Kelas --</option>

<!-- KELAS X -->
<option>X TJKT 1</option>
<option>X TJKT 2</option>
<option>X TJKT 3</option>

<option>X TKI 1</option>
<option>X TKI 2</option>
<option>X TKI 3</option>

<option>X KULINER 1</option>
<option>X KULINER 2</option>
<option>X KULINER 3</option>
<option>X KULINER 4</option>
<option>X KULINER 5</option>
<option>X KULINER 6</option>

<option>X DPB 1</option>
<option>X DPB 2</option>
<option>X DPB 3</option>

<option>X KS 1</option>
<option>X KS 2</option>

<!-- KELAS XI -->
<option>XI TJKT 1</option>
<option>XI TJKT 2</option>
<option>XI TJKT 3</option>

<option>XI TKI 1</option>
<option>XI TKI 2</option>
<option>XI TKI 3</option>

<option>XI KULINER 1</option>
<option>XI KULINER 2</option>
<option>XI KULINER 3</option>
<option>XI KULINER 4</option>
<option>XI KULINER 5</option>
<option>XI KULINER 6</option>

<option>XI DPB 1</option>
<option>XI DPB 2</option>
<option>XI DPB 3</option>

<option>XI KS 1</option>
<option>XI KS 2</option>

</select>

<select name="jenis_kelamin" required>

<option value="">-- Pilih Jenis Kelamin --</option>

<option>Perempuan</option>
<option>Laki-Laki</option>

</select>

<select name="posisi" required>

<option value="">-- Pilih Posisi --</option>

<option value="Setter">Setter</option>

<option value="Spiker">Spiker</option>

<option value="Libero">Libero</option>

<option value="Server">Server</option>

<option value="Middle Blocker">Middle Blocker</option>

<option value="Opposite Hitter">Opposite Hitter</option>

</select>

<select name="jabatan" required>

<option value="">-- Pilih Jabatan --</option>

<option value="Ketua">Ketua</option>

<option value="Wakil Ketua">Wakil Ketua</option>

<option value="Sekretaris">Sekretaris</option>

<option value="Bendahara">Bendahara</option>

<option value="Anggota">Anggota</option>

</select>

<textarea name="alamat" placeholder="Alamat"></textarea>

<button type="submit" name="tambah">
SIMPAN 💙
</button>

</form>

</div>

</body>
</html>