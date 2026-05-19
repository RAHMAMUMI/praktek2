<?php

include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM anggota WHERE id='$id'");

$d = mysqli_fetch_array($data);

if(isset($_POST['update'])){

$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$posisi = $_POST['posisi'];
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];

mysqli_query($conn, "UPDATE anggota SET

nama='$nama',
kelas='$kelas',
jenis_kelamin='$jenis_kelamin',
posisi='$posisi',
jabatan='$jabatan',
alamat='$alamat'

WHERE id='$id'
");

header("Location: dashboard.php");

}

?>

?>

<style>

body{
background:#c9f0ff;
font-family:Poppins;
}

.form{
width:400px;
margin:50px auto;
background:white;
padding:30px;
border-radius:20px;
text-align:center;
box-shadow:0 5px 10px rgba(0,0,0,0.1);
}

h2{
margin-bottom:20px;
}

input,
select,
textarea{
width:100%;
padding:12px;
margin:10px 0;
border:1px solid #ccc;
border-radius:10px;
font-size:15px;
}

button{
background:#29b6f6;
color:white;
border:none;
padding:12px 30px;
border-radius:20px;
font-size:16px;
cursor:pointer;
}

</style>

<div class="form">

<h2>🏐 Edit Anggota</h2>

<form method="POST">

<input type="text"
name="nama"
value="<?php echo $d['nama']; ?>">

<select name="kelas" required>

<!-- X TJKT -->
<option <?php if($d['kelas']=="X TJKT 1") echo "selected"; ?>>X TJKT 1</option>
<option <?php if($d['kelas']=="X TJKT 2") echo "selected"; ?>>X TJKT 2</option>
<option <?php if($d['kelas']=="X TJKT 3") echo "selected"; ?>>X TJKT 3</option>

<!-- XI TJKT -->
<option <?php if($d['kelas']=="XI TJKT 1") echo "selected"; ?>>XI TJKT 1</option>
<option <?php if($d['kelas']=="XI TJKT 2") echo "selected"; ?>>XI TJKT 2</option>
<option <?php if($d['kelas']=="XI TJKT 3") echo "selected"; ?>>XI TJKT 3</option>
<option <?php if($d['kelas']=="XI TJKT 4") echo "selected"; ?>>XI TJKT 4</option>

<!-- X TKI -->
<option <?php if($d['kelas']=="X TKI 1") echo "selected"; ?>>X TKI 1</option>
<option <?php if($d['kelas']=="X TKI 2") echo "selected"; ?>>X TKI 2</option>
<option <?php if($d['kelas']=="X TKI 3") echo "selected"; ?>>X TKI 3</option>

<!-- XI TKI -->
<option <?php if($d['kelas']=="XI TKI 1") echo "selected"; ?>>XI TKI 1</option>
<option <?php if($d['kelas']=="XI TKI 2") echo "selected"; ?>>XI TKI 2</option>
<option <?php if($d['kelas']=="XI TKI 3") echo "selected"; ?>>XI TKI 3</option>

<!-- X KULINER -->
<option <?php if($d['kelas']=="X KULINER 1") echo "selected"; ?>>X KULINER 1</option>
<option <?php if($d['kelas']=="X KULINER 2") echo "selected"; ?>>X KULINER 2</option>
<option <?php if($d['kelas']=="X KULINER 3") echo "selected"; ?>>X KULINER 3</option>
<option <?php if($d['kelas']=="X KULINER 4") echo "selected"; ?>>X KULINER 4</option>
<option <?php if($d['kelas']=="X KULINER 5") echo "selected"; ?>>X KULINER 5</option>
<option <?php if($d['kelas']=="X KULINER 6") echo "selected"; ?>>X KULINER 6</option>

<!-- XI KULINER -->
<option <?php if($d['kelas']=="XI KULINER 1") echo "selected"; ?>>XI KULINER 1</option>
<option <?php if($d['kelas']=="XI KULINER 2") echo "selected"; ?>>XI KULINER 2</option>
<option <?php if($d['kelas']=="XI KULINER 3") echo "selected"; ?>>XI KULINER 3</option>
<option <?php if($d['kelas']=="XI KULINER 4") echo "selected"; ?>>XI KULINER 4</option>
<option <?php if($d['kelas']=="XI KULINER 5") echo "selected"; ?>>XI KULINER 5</option>
<option <?php if($d['kelas']=="XI KULINER 6") echo "selected"; ?>>XI KULINER 6</option>

<!-- X DPB -->
<option <?php if($d['kelas']=="X DPB 1") echo "selected"; ?>>X DPB 1</option>
<option <?php if($d['kelas']=="X DPB 2") echo "selected"; ?>>X DPB 2</option>
<option <?php if($d['kelas']=="X DPB 3") echo "selected"; ?>>X DPB 3</option>

<!-- XI DPB -->
<option <?php if($d['kelas']=="XI DPB 1") echo "selected"; ?>>XI DPB 1</option>
<option <?php if($d['kelas']=="XI DPB 2") echo "selected"; ?>>XI DPB 2</option>
<option <?php if($d['kelas']=="XI DPB 3") echo "selected"; ?>>XI DPB 3</option>

<!-- X KS -->
<option <?php if($d['kelas']=="X KS 1") echo "selected"; ?>>X KS 1</option>
<option <?php if($d['kelas']=="X KS 2") echo "selected"; ?>>X KS 2</option>

<!-- XI KS -->
<option <?php if($d['kelas']=="XI KS 1") echo "selected"; ?>>XI KS 1</option>
<option <?php if($d['kelas']=="XI KS 2") echo "selected"; ?>>XI KS 2</option>

</select>

<select name="jenis_kelamin" required>

<option <?php if($d['jenis_kelamin']=="Perempuan") echo "selected"; ?>>
Perempuan
</option>

<option <?php if($d['jenis_kelamin']=="Laki-Laki") echo "selected"; ?>>
Laki-Laki
</option>

</select>

<select name="posisi" required>

<option <?php if($d['posisi']=="Setter") echo "selected"; ?>>Setter</option>

<option <?php if($d['posisi']=="Spiker") echo "selected"; ?>>Spiker</option>

<option <?php if($d['posisi']=="Libero") echo "selected"; ?>>Libero</option>

<option <?php if($d['posisi']=="Tosser") echo "selected"; ?>>Tosser</option>

<option <?php if($d['posisi']=="Middle Blocker") echo "selected"; ?>>Middle Blocker</option>

</select>

<select name="jabatan" required>

<option <?php if($d['jabatan']=="Ketua") echo "selected"; ?>>Ketua</option>

<option <?php if($d['jabatan']=="Wakil Ketua") echo "selected"; ?>>Wakil Ketua</option>

<option <?php if($d['jabatan']=="Sekretaris") echo "selected"; ?>>Sekretaris</option>

<option <?php if($d['jabatan']=="Bendahara") echo "selected"; ?>>Bendahara</option>

<option <?php if($d['jabatan']=="Anggota") echo "selected"; ?>>Anggota</option>

</select>

<textarea name="alamat"><?php echo $d['alamat']; ?></textarea>

<br><br>

<button type="submit" name="update">
Update 💙
</button>

</form>

</div>