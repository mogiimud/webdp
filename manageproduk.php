<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products</title>
</head>
<body>
<a href="admin.php">BACK</a>
    <div class="container">
        <h1>Manage Products</h1>
        <a href="addproduk.php">Add New Product</a>
        <br><br>
        <table border="1" class="table">
            <tr>
                <th>No</th>
                <th>Name Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stock</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php
            include 'kooneksi.php';
            $nomor = 1;
            $query_mysql = mysqli_query($mysqli, "SELECT * FROM products ") or die(mysqli_error($mysqli));

            while ($data = mysqli_fetch_array($query_mysql)) {
                echo "<tr>";
                echo "<td>" . $nomor++ . "</td>";
                echo "<td>" . $data['name_product'] . "</td>";
                echo "<td>" . $data['kategori'] . "</td>";
                echo "<td>" . $data['price'] . "</td>";
                echo "<td>" . $data['stock'] . "</td>";
                echo "<td><a href='editproduk.php?product_id=" . $data['product_id'] . "'>Edit</a></td>";
                echo "<td><a href='deleteproduk.php?product_id=" . $data['product_id'] . "'>Delete</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
<style>
   <style>
        body {
            margin: 40px;
            font-family: "Poppins", sans-serif;
            background-color: #ffccf2; /* Background pink muda */
            color: #000; /* Teks berwarna hitam untuk kontras */
        }

        table {
            width: 100%;
            font-size: 14px;
            color: black;
            white-space: nowrap;
            text-align: center;
            background-color: #ffe6f7; /* Background tabel pink sangat muda */
            border-collapse: collapse; /* Menggabungkan batas sel */
        }

        table th, table td {
            padding: 10px; /* Menambahkan ruang di antara sel */
            border: 1px solid #ff99cc; /* Warna batas sel pink */
        }

        table th {
            background-color: #ff66b2; /* Background kolom header pink */
            color: white;
            text-align: center;
        }

        table td {
            background-color: #ffcce6; /* Background sel tabel pink sangat muda */
            color: black; /* Warna teks hitam */
            text-align: center;
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
    </style>
</style>