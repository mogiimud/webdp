<?php
session_start();
include 'kooneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data dari form
    $id_user = $_SESSION['id_user'];
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Validasi ketersediaan produk
    $query_check_stock = mysqli_query($mysqli, "SELECT stock, price FROM products WHERE product_id = '$product_id'");
    $product_data = mysqli_fetch_assoc($query_check_stock);
    $available_stock = $product_data['stock'];
    $product_price = $product_data['price'];

    if ($available_stock < $quantity) {
        echo "Maaf, stok tidak mencukupi.";
        exit();
    }

    // Hitung total harga
    $total_price = $product_price * $quantity;

    // Mulai transaksi
    mysqli_begin_transaction($mysqli);

    // Kurangi stok produk
    $update_stock_query = "UPDATE products SET stock = stock - $quantity WHERE product_id = '$product_id'";
    if (!mysqli_query($mysqli, $update_stock_query)) {
        mysqli_rollback($mysqli);
        echo "Error updating stock: " . mysqli_error($mysqli);
        exit();
    }

    // Tanggal pesanan
    $order_date = date("Y-m-d H:i:s");

    // Masukkan pesanan ke dalam database
    $insert_order_query = "INSERT INTO orders (id_user, product_id, quantity, order_date, price, total_price) VALUES ('$id_user', '$product_id', '$quantity', '$order_date', '$product_price', '$total_price')";
    if (!mysqli_query($mysqli, $insert_order_query)) {
        mysqli_rollback($mysqli);
        echo "Error placing order: " . mysqli_error($mysqli);
        exit();
    }

    // Commit transaksi
    mysqli_commit($mysqli);

     // Pengalihan ke halaman sukses
     header("Location: succes.php");
     exit();
}
?>
