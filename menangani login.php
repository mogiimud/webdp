<?php
// Mengaktifkan session pada PHP
session_start();
include 'kooneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($mysqli, "select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if ($data['level'] == "admin") {
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        // alihkan ke halaman dashboard admin
        header("location:tabel.php");

    // cek jika user login sebagai user
    }else if ($data['level'] == "user"){
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "user"; 
        // alihkan ke halaman dashboard user
        header("location:landingku2.php");

    }else {

        // alihkan ke halaman login kembali
        header("location: tampilan login.php");
    }
} else {
    header("location:landingpage.php?pesan=gagal");
}
?>
