<?php
include("kooneksi.php");

//cek apakah tombol simpan sudah diklik atau belum?
if(isset($_POST['simpan'])){

    $id_user=$_POST['id_user'];
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $level=$_POST['level'];

    //buat query update
    $result = mysqli_query($mysqli, "UPDATE user
    SET nama='$nama',username='$username',password='$password', level='$level'
    WHERE id_user=$id_user");
    header('location: edit_user.php');
} else {
    die("Akses dilarang...");
}


























































































?>