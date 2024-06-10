
Salin kode
<?php
session_start();
include 'kooneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lakukan verifikasi login, misalnya dari database
    $query = "SELECT id_user, email FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($mysqli, $query);

    if (mysqli_num_rows($result) == 1) {
        // Jika login berhasil, simpan ID pengguna dan email ke dalam sesi
        $user_data = mysqli_fetch_assoc($result);
        $_SESSION['id_user'] = $user_data['id_user'];
        $_SESSION['email'] = $user_data['email'];
    }}


if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if ($data['level'] == "admin") {
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        // alihkan ke halaman dashboard admin
        header("location:admin.php");

    // cek jika user login sebagai user
    }else if ($data['level'] == "user"){
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "user"; 
        // alihkan ke halaman dashboard user
        header("location:landing_ku2.php");

    }else {

        // alihkan ke halaman login kembali
        header("location: tampilan_login.php");
    }
} else {
    header("location:landing_ku2.php?pesan=gagal");
}
?>