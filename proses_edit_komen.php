<?php
include("kooneksi.php");

//cek apakah tombol simpan sudah diklik atau belum?
if(isset($_POST['simpan'])){

    $id=$_POST['id'];
    $name=$_POST['name'];
    $comment=$_POST['comment'];
    
    //buat query update
    $result = mysqli_query($mysqli, "UPDATE orders
    SET name='$name',comment='$comment'
    WHERE id=$id");
    header('location: edit_komen.php');
} else {
    die("Akses dilarang...");
}