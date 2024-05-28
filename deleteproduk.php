<?php
include 'kooneksi.php';
 
$product_id = $_GET['product_id'];

$sql = "DELETE FROM products WHERE product_id='$product_id'";

if ($mysqli->query($sql) === TRUE) {
    echo "Product deleted successfully!";
    echo "<br><a href='manageproduk.php'>Back to product list</a>";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>
