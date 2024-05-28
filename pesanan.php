<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pengolahan_yogurt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$nama_pelanggan = $_POST['nama_pelanggan'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO orders (nama_pelanggan, email, alamat, produk, jumlah) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $nama_pelanggan, $email, $alamat, $produk, $jumlah);

// Execute the statement
if ($stmt->execute()) {
    header("Location: order.php#confirmation");
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
