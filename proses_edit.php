<?php
include("kooneksi.php");

// cek apakah tombol simpan sudah diklik atau belum?
if(isset($_POST['simpan'])){

    // tangkap data dari form
    $user_id = $_POST['id_user'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    // buat query update
    $result = mysqli_query($mysqli, "UPDATE users
    SET name='$name', username='$username', password='$password', level='$level'
    WHERE id_user=$user_id");

    // cek apakah query berhasil dijalankan
    if($result){
        // redirect ke halaman edit_user.php jika berhasil
        header('location: edit_user.php');
    } else {
        // tampilkan pesan kesalahan jika query gagal dijalankan
        echo "Error: " . mysqli_error($mysqli);
    }
} else {
    // tampilkan pesan akses dilarang jika tidak ada akses melalui tombol simpan
    die("Akses dilarang...");
}
?>
