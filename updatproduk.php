<?php
include 'kooneksi.php';

$product_id = $_POST['product_id'];
$name_product = $_POST['name_product'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$stock = $_POST['stock'];

$sql = "UPDATE products SET name_product='$name_product', kategori='$kategori', harga='$harga', stock='$stock' WHERE product_id='$product_id'";

if ($mysqli->query($sql) === TRUE) {
    echo "Product updated successfully!";
    echo "<br><a href='manageproduk.php' style='display: inline-block; padding: 8px 16px; background-color: #ff4081; color: white; text-decoration: none; border-radius: 5px; border: none; cursor: pointer; transition: background-color 0.3s;'>Back to product list</a>";

} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>
