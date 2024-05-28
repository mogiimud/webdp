<?php
include 'kooneksi.php';

$nama_produk = $_POST['nama_produk'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$sql = "INSERT INTO produk (nama_produk, kategori, harga, stok) VALUES ('$nama_produk', '$kategori', '$harga', '$stok')";

if ($mysqli->query($sql) === TRUE) {
    echo "New product added successfully!";
    echo "<br><a href='manageproduk.php'>Back to product list</a>";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>
