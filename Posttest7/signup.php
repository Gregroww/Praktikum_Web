<?php 
require 'koneksi.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password != $confirm_password) {
        echo "<script>
        alert('Konfirmasi Password Salah');
        document.location.href = 'signup.php';
        </script>";
    }

    $query = "SELECT * FROM users WHERE username = '$username' ";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>
        alert('Username Sudah Terdaftar');
        document.location.href = 'signup.php';
        </script>";
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>
        alert('Registrasi Berhasil');
        document.location.href = 'login.php';
        </script>";
    } else {
        echo "<script>
        alert('Registrasi Gagal');
        document.location.href = 'signup.php';
        </script>";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style/signup.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h1>Sign Up</h1>
            <h2>Silahkan buat akun</h2>
            <form action="" method="POST" enctype="multipart/form-data">
                <h3>Masukan Username</h3>
                <input type="text" name="username" placeholder="Username" required> 

                <h3>Masukan Email</h3>
                <input type="email" name="email" placeholder="name@gmail.com" required> 
                
                <h3>Masukan Password</h3>
                <input type="password" name="password" placeholder="Password" required> 
                
                <h3>Konfirmasi Password</h3>
                <input type="password" name="confirm_password" placeholder="Konfirmasi Password" required> 

                <button class="button" type="submit" value="submit" name="submit">Sign Up</button>
            </form>
            <p style="text-align: center;">Sudah registrasi? login di <a href="login.php">sini!</a></p>
        </div>
    </div>