<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir Pemesanan</title>
  <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #ffe6f2;
    margin: 0;
    padding: 0;
}

li a {
    display: inline-block;
    padding: 10px 20px;
    margin: 20px;
    background-color: #ff99cc;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    transition: background-color 0.3s ease;
}

li a:hover {
    background-color: #ff66b3;
}

.container {
    width: 50%;
    margin: 50px auto;
    background-color: #ffccf2;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
}

h1 {
    text-align: center;
    color: #ff4da6;
    margin-bottom: 20px;
    text-shadow: 1px 1px 2px #ff99cc;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-top: 10px;
    color: #ff4da6;
}

input[type="text"],
input[type="number"] {
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ff99cc;
    border-radius: 5px;
    box-shadow: inset 0 2px 4px rgba(255, 153, 204, 0.3);
}

input[type="submit"] {
    margin-top: 20px;
    padding: 10px;
    background-color: #ff99cc;
    color: white;
    border: none;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    cursor: pointer;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #ff66b3;
}

  </style>
</head>
<body>
  <li><a href="produkshop.php">BACK</a></li>
  <div class="container">
    <h1>Formulir Pemesanan</h1>
    <form action="submit_order.php" method="POST">
      <label for="Nama">Nama Pelanggan:</label>
      <input type="text" id="Nama" name="Nama" required>

      <label for="Email">Email:</label>
      <input type="text" id="Email" name="Email" required>

      <label for="Alamat">Alamat : </label>
      <input type="text" id="Alamat" name="Alamat" required>

      <label for="Phone">No Telp : </label>
      <input type="text" id="Phone" name="Phone" required>

      <label for="product_id">ID Produk:</label>
      <input type="number" id="product_id" name="product_id" required>

      <label for="Quantity">Jumlah:</label>
      <input type="number" id="Quantity" name="Quantity" required>

      <input type="submit" value="Pesan">
    </form>
  </div>
</body>
</html>
