<?php
session_start();
include 'koneksi.php';

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    // USER LOGIN
    if($username == "2526_05" && $password == "12345678"){

        $_SESSION['login'] = true;

        header("Location: dashboard.php");
        exit;

    } else {
        $error = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login Volleyball Club</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>

body{
    margin:0;
    padding:0;

    font-family:'Poppins',sans-serif;

    background:
    url('bg2.png') center center no-repeat,
    linear-gradient(to bottom right,#eef8ff,#dff1ff);

    background-size:cover;
    background-attachment:fixed;

    min-height:100vh;

    display:flex;
    justify-content:center;
    align-items:center;
}

.login-box{

    width:350px;

    background:rgba(255,255,255,0.93);

    padding:35px;

    border-radius:35px;

    text-align:center;

    box-shadow:0 10px 30px rgba(0,0,0,0.1);

    backdrop-filter:blur(5px);
}

.logo{
    width:100px;
    height:100px;
    object-fit:cover;

    border-radius:50%;

    border:4px solid #8ecbff;

    margin-bottom:15px;
}

h1{
    color:#248cff;
    margin:5px 0;
    font-size:38px;
}

h3{
    color:#4da6ff;
    margin-top:0;
    font-weight:600;
}

p{
    color:#777;
    font-size:14px;
}

input{

    width:100%;

    padding:14px;

    margin-top:15px;

    border:none;

    border-radius:15px;

    background:#f4f9ff;

    font-size:15px;

    box-sizing:border-box;
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

.error{
    color:red;
    margin-top:10px;
    font-size:14px;
}

.icon{
    font-size:25px;
    margin-bottom:10px;
}

</style>
</head>
<body>

<div class="login-box">

    <div class="icon">
        🏐 ☁️ 💙 ✨
    </div>

    <img src="logo.png" class="logo">

    <h1>VOLLEYBALL CLUB</h1>
    <h3>SMKN 2 BALEENDAH 💙</h3>

    <p>Selamat Datang Kembali ✨</p>

    <?php if(isset($error)){ ?>
        <div class="error"><?php echo $error; ?></div>
    <?php } ?>

    <form method="POST">

        <input type="text" name="username" placeholder="Username atau NIS" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" name="login">
            LOGIN 💙
        </button>

    </form>

    <div class="icon" style="margin-top:20px;">
        ✨ 🏐 ☁️ 💙
    </div>

</div>

</body>
</html>