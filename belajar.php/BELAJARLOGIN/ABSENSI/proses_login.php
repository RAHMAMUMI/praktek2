<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND password='$password'");
$data = mysqli_fetch_array($query);

if ($data) {
    $_SESSION['username'] = $username;
    header("Location: absen.php");
} else {
    echo "Login gagal!";
}
?>

