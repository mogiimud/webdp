<?php
session_start();
include 'kooneksi.php';

// Mengambil ID pengguna dari sesi
$id_user = $_SESSION['id_user'];

// Mengambil data pesanan dari database
$query_orders = "SELECT orders.order_id, products.name_product, products.kategori, orders.order_date, orders.quantity, orders.price, orders.total_price
                FROM orders 
                INNER JOIN products ON orders.product_id = products.product_id 
                WHERE orders.id_user = '$id_user' 
                ORDER BY orders.order_date DESC";

$result_orders = mysqli_query($mysqli, $query_orders);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<a href="landing_ku2.php">BACK</a>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pemesanan</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Riwayat Pemesanan</h1>
        <table>
            <thead>
                <tr>
                    <th>ID Pesanan</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Tanggal Pesanan</th>
                    <th>Jumlah</th>
                    <th>Harga Satuan</th>
                    <th>Total Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result_orders) > 0) {
                    while ($row = mysqli_fetch_assoc($result_orders)) {
                        echo "<tr>";
                        echo "<td>" . $row['order_id'] . "</td>";
                        echo "<td>" . $row['name_product'] . "</td>";
                        echo "<td>" . $row['kategori'] . "</td>";
                        echo "<td>" . $row['order_date'] . "</td>";
                        echo "<td>" . $row['quantity'] . "</td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td>" . $row['total_price'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>Belum ada riwayat pemesanan.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<style>
  body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
}
a {
            display: inline-block;
            padding: 10px 20px; /* Tambahan padding untuk efek 3D */
            background-color: #ff66b2; /* Warna background pink */
            color: white; /* Warna teks putih */
            text-decoration: none;
            border-radius: 5px;
            border: 2px solid #ff3399; /* Tambahkan border untuk efek 3D */
            box-shadow: 0 5px #ff3399; /* Bayangan untuk efek 3D */
            cursor: pointer;
            transition: all 0.3s;
        }

        a:hover {
            background-color: #ff3399; /* Warna background pink lebih gelap saat hover */
            box-shadow: 0 3px #ff0066; /* Mengurangi bayangan untuk efek 3D */
            transform: translateY(-2px); /* Efek naik saat hover */
        }

        a:active {
            background-color: #ff0066; /* Warna background pink lebih gelap saat aktif */
            box-shadow: 0 2px #ff3399; /* Mengurangi bayangan lebih jauh */
            transform: translateY(2px); /* Efek turun saat aktif */
        }

.navbar {
    width: 100%;
    background-color: #ff69b4;
    overflow: hidden;
    padding: 10px 0;
    text-align: center;
    position: fixed;
    top: 0;
    left: 0;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.navbar a {
    color: white;
    text-decoration: none;
    padding: 14px 20px;
    font-size: 18px;
}

.navbar a:hover {
    background-color: #ff1493;
}

.container {
    width: 60%;
    margin: 100px auto 0;
    background-color: #ffe6f0;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    text-align: center;
}

h1 {
    color: #ff69b4;
    margin-bottom: 20px;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
}

.receipt {
    background: linear-gradient(145deg, #ffccdd, #ff99bb);
    box-shadow: 5px 5px 10px #d4a5a5, -5px -5px 10px #ffefff;
    padding: 20px;
    border-radius: 10px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #ff69b4;
}

th, td {
    padding: 10px;
    text-align: left;
    color: #333;
}

th {
    background-color: #ffb3c6;
    color: #fff;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
}

td {
    background-color: #ffe6f0;
}

tr:nth-child(even) td {
    background-color: #ffccdd;
}

tr:hover td {
    background-color: #ffb3c6;
    color: #fff;
    transition: background-color 0.3s;
}

</style>