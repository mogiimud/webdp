<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yogurt Web</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #ff85a2; /* Warna latar belakang pink */
      color: #fff; /* Warna teks putih */
    }

    .navbar {
      background: #ff85a2; /* Warna latar belakang pink */
      padding: 10px 0;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Bayangan untuk navbar */
    }

    .navbar ul {
      display: flex;
      justify-content: center; /* Menyamakan konten navbar ke tengah */
      align-items: center;
      gap: 20px; /* Jarak antar item di navbar */
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .navbar li {
      position: relative;
    }

    .navbar a {
      color: #fff; /* Warna teks putih */
      text-decoration: none;
      font-size: 16px;
      padding: 10px 15px;
      transition: background 0.3s ease, color 0.3s ease;
    }

    .navbar a:hover {
      background: #d147a3; /* Warna latar belakang saat dihover */
      color: #fff; /* Warna teks saat dihover */
      border-radius: 4px; /* Sudut melengkung saat dihover */
    }

    .navbar a:active {
      background: #b33c86; /* Warna latar belakang saat diklik */
    }

    @media (max-width: 768px) {
      .navbar ul {
        flex-direction: column;
      }
      .navbar a {
        display: block;
        text-align: center;
        width: 100%;
      }
    }

    #header {
      background-color: #d147a3; /* Warna latar belakang header pink tua */
      color: #fff;
      padding: 5px;
    }

    #banner {
      height: 85vh;
      background-image: url('wppadmin.jpg');
      background-position: center;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
    }
    
  </style>
</head>
<body>
  <header id="header">
  <div class="navbar">
         
         <ul>
             <li><a href="landingku2.php">BACK</a></li>
             <li><a href="tabel.php">TABEL USER</a></li>
             <li><a href="datapesanan.php">TABEL ORDERS</a></li>
             <li><a href="manageproduk.php">TABEL PRODUK</a></li>
             <li><a href="newkomen.php">TABEL KOMEN</a></li>

         </ul>
     </div>
  </header>

  <section id="banner">
  </section>
</body>
</html>
