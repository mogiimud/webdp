<?php
include 'kooneksi.php';

$product_id = $_GET['product_id'];
$query_mysql = mysqli_query($mysqli, "SELECT * FROM products WHERE product_id='$product_id'") or die(mysqli_error($mysqli));
$data = mysqli_fetch_array($query_mysql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background-color: #ffccf2; /* Background pink muda */
            color: #000; /* Teks berwarna hitam untuk kontras */
            padding: 20px;
            margin: 0;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background-color: #ffe6f7; /* Background container pink sangat muda */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); /* Bayangan untuk efek 3D */
        }
        h1 {
            color: #ff3399; /* Warna teks pink lebih gelap */
            text-align: center;
        }
        label {
            display: block;
            margin: 10px 0 5px;
            color: #ff3399; /* Warna label pink */
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ff99cc; /* Warna batas pink */
            border-radius: 4px; /* Sudut melengkung */
            box-sizing: border-box;
        }
        button {
            width: 100%;
            background-color: #ff66b2; /* Background pink */
            color: white;
            padding: 10px 20px;
            margin: 15px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            box-shadow: 0 5px #ff3399; /* Bayangan untuk efek 3D */
            transition: all 0.3s ease;
        }
        button:hover {
            background-color: #ff3399; /* Warna background pink lebih gelap saat hover */
            box-shadow: 0 3px #ff0066; /* Mengurangi bayangan untuk efek 3D */
            transform: translateY(-2px); /* Efek naik saat hover */
        }
        button:active {
            background-color: #ff0066; /* Warna background pink lebih gelap saat aktif */
            box-shadow: 0 2px #ff3399; /* Mengurangi bayangan lebih jauh */
            transform: translateY(2px); /* Efek turun saat aktif */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Product</h1>
        <form action="updatproduk.php" method="post">
            <input type="hidden" name="product_id" value="<?php echo $data['product_id']; ?>">
            <label for="name_product">Nama Produk:</label>
            <input type="text" id="name_product" name="name_product" value="<?php echo $data['name_product']; ?>" required>
            <label for="kategori">Kategori:</label>
            <input type="text" id="kategori" name="kategori" value="<?php echo $data['kategori']; ?>" required>
            <label for="price">Harga:</label>
            <input type="number" id="price" name="price" value="<?php echo $data['price']; ?>" required>
            <label for="stock">Stok:</label>
            <input type="number" id="stock" name="stock" value="<?php echo $data['stock']; ?>" required>
            <button type="submit">Update Product</button>
        </form>
    </div>
</body>
</html>
