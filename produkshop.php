<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produk Yogurt</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #ffccff, #ff99cc); /* Latar belakang pink gradien */
      color: #333;
    }

    .box-container {
      display: flex;
      flex-wrap: wrap;
      gap: 24px;
      justify-content: center; /* Menyamakan kotak ke tengah */
      padding: 20px;
    }

    .box {
      padding: 20px;
      background: linear-gradient(135deg, #ffccff, #ff99cc);
      box-shadow: 8px 16px 24px rgba(255, 105, 180, 0.4);
      border-radius: 12px;
      text-align: center;
      flex: 1 1 300px; /* Lebar minimum, lebar awal, dan lebar maksimum */
      position: relative; /* Agar .price bisa diatur posisinya relatif terhadap .box */
      transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .box:hover {
      transform: translateY(-10px);
      box-shadow: 12px 24px 36px rgba(255, 105, 180, 0.6);
    }

    .box img {
      height: 200px; /* Ubah tinggi gambar agar seragam */
      width: auto; /* Atur lebar gambar agar sesuai proporsi */
      border-radius: 8px;
    }

    .box h1 {
      color: #333;
      font-size: 18px;
      margin-top: 10px; /* Berikan sedikit jarak atas pada judul */
    }

    .box p {
      margin: 8px 0; /* Berikan sedikit jarak antara paragraf */
      text-align: justify;
    }

    li a {
      color: #fff; /* Warna teks putih */
      background-color: #ff66b3; /* Warna latar belakang pink */
      border: 2px solid #ff99cc; /* Warna border pink lebih muda */
      padding: 10px 20px; /* Padding */
      text-decoration: none; /* Menghapus garis bawah */
      display: inline-block; /* Supaya padding berlaku dengan baik */
      font-weight: bold; /* Teks tebal */
      border-radius: 8px;
      transition: background-color 0.3s, color 0.3s, transform 0.3s;
      box-shadow: 0 4px 8px rgba(255, 105, 180, 0.4); /* Efek tiga dimensi */
    }

    /* CSS untuk efek hover */
    li a:hover {
      background-color: #ff99cc; /* Warna latar belakang saat hover */
      color: #fff; /* Warna teks saat hover */
      transform: scale(1.05); /* Efek pembesaran saat hover */
    }

    /* CSS untuk efek klik */
    li a:active {
      transform: scale(0.95); /* Efek pengecilan saat di-klik */
    }
</style>
</head>
<body>
  <li><a href="landingku2.php">BACK</a></li>
  <div class="box-container">
    <?php
    include 'kooneksi.php';
    $query_mysql = mysqli_query($mysqli, "SELECT * FROM products ") or die(mysqli_error($mysqli));

    while ($data = mysqli_fetch_array($query_mysql)) { ?>
    <div class="box">
      <img src="<?php echo $data['foto'] ?>" alt="<?php echo $data['name_product'] ?>">
      <h1><?php echo $data['no_kode']?></h1>
      <h1><?php echo $data['name_product']?></h1>
      <h1><?php echo $data['kategori']?></h1>
      <h1><?php echo $data['price']?></h1>
      <h1><?php echo $data['stock']?></h1>
      <li><a href="order.php">ORDER</a></li>
    </div>
    <?php } ?>
  </div>
</body>
</html>
