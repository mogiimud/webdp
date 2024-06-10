<?php
include 'kooneksi.php';

// Check if form data is set
if (isset($_POST['name_product']) && isset($_POST['kategori']) && isset($_POST['price']) && isset($_POST['stock'])) {
    $name_product = $_POST['name_product'];
    $kategori = $_POST['kategori'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    
    // Prepared statement to prevent SQL injection
    $stmt = $mysqli->prepare("INSERT INTO products (name_product, kategori, price, stock) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssdi", $name_product, $kategori, $price, $stock);
    
    if ($stmt->execute() === TRUE) {
        echo "New product added successfully!";
        echo "<br><a href='manageproduk.php'>Back to product list</a>";
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
} else {
    echo "Error: Please fill in all required fields.";
}

$mysqli->close();
?>
