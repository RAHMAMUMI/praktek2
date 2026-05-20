<?php

$conn = mysqli_connect(
"localhost",
"2526_05",
"123tjktok",
"2526_05db"
);

if(!$conn){
die("Koneksi gagal: " . mysqli_connect_error());
}

?>