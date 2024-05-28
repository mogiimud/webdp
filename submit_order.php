<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pengolahan_yogurt";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($mysqli->connect_errno) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Ambil data dari form
$nama = $_POST['Nama'];
$email = $_POST['Email'];
$alamat = $_POST['Alamat'];
$phone = $_POST['Phone'];
$product_id = $_POST['product_id'];
$quantity = $_POST['Quantity'];

// Insert data ke tabel customer
$insertCustomer = "INSERT INTO customer (Nama, Email, Alamat, Phone) VALUES ('$nama', '$email', '$alamat', '$phone')";
if ($mysqli->query($insertCustomer) === TRUE) {
    $customer_id = $mysqli->insert_id; // Mendapatkan ID customer yang baru dimasukkan

    // Insert data ke tabel order
    $insertOrder = "INSERT INTO `order` (Customer_id, Order_date) VALUES ('$customer_id', NOW())";
    if ($mysqli->query($insertOrder) === TRUE) {
        $order_id = $mysqli->insert_id; // Mendapatkan ID order yang baru dimasukkan

        // Insert data ke tabel orderdetails
        $insertOrderdetails = "INSERT INTO orderdetails (Order_id, product_id, Quantity) VALUES ('$order_id', '$product_id', '$quantity')";
        if ($mysqli->query($insertOrderdetails) === TRUE) {
            echo "Pesanan berhasil dibuat.";
        } else {
            echo "Error: " . $insertOrderdetails . "<br>" . $mysqli->error;
        }
    } else {
        echo "Error: " . $insertOrder . "<br>" . $mysqli->error;
    }
} else {
    echo "Error: " . $insertCustomer . "<br>" . $mysqli->error;
    }

// Tutup koneksi
$mysqli->close();
?>
*