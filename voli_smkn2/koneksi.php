<?php

$conn = mysqli_connect(
"localhost",
"2526_05",
"12345678",
"2526_05db"
);

if(!$conn){
die("Koneksi gagal: " . mysqli_connect_error());
}

?>