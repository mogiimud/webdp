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
      background: white;
      color: #333;
    }

    .box-container {
      display: flex;
      flex-wrap: wrap;
      gap: 24px;
      justify-content: center;
      padding: 20px;
    }

    .box {
      padding: 20px;
      background: linear-gradient(135deg, #ffccff, #ff99cc);
      border-radius: 12px;
      text-align: center;
      flex: 1 1 300px;
      position: relative;
      transition: transform 0.3s ease-in-out;
    }

    .box:hover {
      transform: translateY(-10px) rotateX(5deg) rotateY(5deg);
    }

    .box img {
      height: 200px;
      width: auto;
      border-radius: 8px;
    }

    .box h1 {
      color: #333;
      font-size: 15px;
      margin-top: 10px;
    }

    .box p {
      margin: 8px 0;
      text-align: justify;
    }

    li a {
      color: #fff;
      background-color: #ff66b3;
      border: 2px solid #ff99cc;
      padding: 10px 20px;
      text-decoration: none;
      display: inline-block;
      font-weight: bold;
      border-radius: 8px;
      transition: background-color 0.3s, color 0.3s, transform 0.3s;
      box-shadow: 0 4px 8px rgba(255, 105, 180, 0.4);
    }

    li a:hover {
      background-color: #ff99cc;
      color: #fff;
      transform: scale(1.05);
    }

    li a:active {
      transform: scale(0.95);
    }
  </style>
</head>
<body>
  <li><a href="landing_ku2.php">BACK</a></li>
  <div class="box-container">
  <?php
session_start(); // Mulai session sebelum mengakses session variabel

include 'kooneksi.php';
$query_mysql = mysqli_query($mysqli, "SELECT * FROM products") or die(mysqli_error($mysqli));

while ($data = mysqli_fetch_array($query_mysql)) { ?>
    <div class="box">
        <img src="<?php echo $data['foto'] ?>" alt="<?php echo $data['name_product'] ?>">
        <h1><?php echo $data['name_product'] ?></h1>
        <h1><?php echo $data['kategori'] ?></h1>
        <h1>Harga: <?php echo $data['price'] ?></h1>
        <p>Stock: <?php echo $data['stock'] ?></p>
        <form action="order.php" method="post">
            <input type="hidden" name="id_user" value="<?php echo isset($_SESSION['id_user']) ? $_SESSION['id_user'] : ''; ?>"> <!-- Tambahkan input tersembunyi untuk menyimpan ID pengguna -->
            <input type="hidden" name="product_id" value="<?php echo $data['product_id']; ?>">
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" max="<?php echo $data['stock']; ?>" required>
            <input type="submit" value="Order">
        </form>
    </div>
<?php } ?>

  </div>
</body>
</html>
