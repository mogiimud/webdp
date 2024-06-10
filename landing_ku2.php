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
      padding: 6px;
    }

    #banner {
      height: 80vh;
      background-image: url('pinky.jpg');
      background-position: center;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 50px;
      text-align: center;
    }

    #features {
      padding: 2rem;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    #features .feature {
      flex-basis: 30%;
      text-align: center;
      margin-bottom: 2rem;
      background-color: #ffb3d9; /* Warna latar belakang fitur pink muda */
      padding: 20px;
      border-radius: 10px;
    }

    #features .feature img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      margin-bottom: 1rem;
      border-radius: 8px;
    }

    #features .feature h2 {
      color: #fff; /* Warna judul fitur putih */
      font-size: 18px;
      margin-bottom: 0.5rem;
    }

    #features .feature p {
      color: #fff; /* Warna teks fitur putih */
      font-size: 14px;
    }
    
    footer {
      background-color: #ff66b3;
      color: #fff;
      padding: 1rem;
      text-align: center;
      box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.2);
    }

    footer ul {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      justify-content: center;
      gap: 20px;
    }

    footer ul li {
      background-color: #ff99cc;
      padding: 10px;
      border-radius: 5px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    footer ul li a {
      color: #fff; /* Warna teks putih */
      text-decoration: none;
      font-size: 16px;
      transition: color 0.3s ease;
    }

    footer ul li a:hover {
      color: #b33c86; /* Warna teks saat dihover */
    }

    footer p {
      margin: 0.5rem 0;
    }

    .logout-box {
      background-color: #ff99cc;
      padding: 10px;
      border-radius: 5px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      display: inline-block;
      margin-top: 10px;
    }

    .logout-box a {
      color: #fff; /* Warna teks putih */
      text-decoration: none;
      font-size: 16px;
      transition: color 0.3s ease;
    }

    .logout-box a:hover {
      color: #b33c86; /* Warna teks saat dihover */
    }
    
  </style>
</head>
<body>
  <header id="header">
    <div class="navbar">
      <ul>
        <li><a href="logout.php">LOGOUT</a></li>
        <li><a href="profil.php">PROFILE WEB</a></li>
        <li><a href="tentangkami.php">TENTANG KAMI</a></li>
        <li><a href="materiyogurt.php">MATERI YOGURT</a></li>
        <li><a href="produkshop.php">ORDER</a></li>
        <li><a href="comment2.php">COMMENT</a></li>
        <li><a href="riwayat_pemesanan.php">RIWAYAT PESANAN</a></li>
      </ul>
    </div>
  </header>

  <section id="banner">
  </section>
  <section id="features">
    <div class="feature">
      <img src="yogurt flavo.jpg" alt="Yogurt Flavored">
      <h2>Yogurt Flavored</h2>
      <p>Ada berbagai varian yogurt yang diberi rasa, seperti yogurt lemon, yogurt jeruk, atau yogurt mango, yang menawarkan variasi rasa yang menyegarkan dan menyenangkan.</p>
    </div>
    <div class="feature">
      <img src="yogurtgreen.png" alt="Yogurt Tinggi Protein">
      <h2>Yogurt Tinggi Protein</h2>
      <p>Yogurt yang diperkaya dengan protein tambahan, seperti protein whey atau protein kedelai, menawarkan rasa yang kaya dan nutrisi tambahan bagi mereka yang membutuhkan asupan protein yang lebih tinggi.</p>
    </div>
    <div class="feature">
      <img src="yogurtdrink.jpg" alt="Yogurt Drink Susu">
      <h2>Yogurt Drink Susu</h2>
      <p>Yogurt drink yang memiliki rasa buah-buahan, seperti stroberi, peach, blueberry, mangga, atau melon. Rasa buah menambah kesegaran dan kelezatan minuman.</p>
    </div>
    <div class="feature">
      <img src="cimory.jpg" alt="Yogurt Squeeze">
      <h2>Yogurt Squeeze</h2>
      <p>Yogurt dalam kemasan praktis yang bisa dinikmati kapan saja dan di mana saja, dengan berbagai pilihan rasa buah-buahan yang segar.</p>
    </div>
    <div class="feature">
      <img src="allcimory.jpg" alt="Yogurt Yogurt">
      <h2>Yogurt Yogurt</h2>
      <p>Yogurt dengan berbagai pilihan rasa dan tekstur, baik yang creamy maupun yang lebih ringan, cocok untuk berbagai selera dan kebutuhan.</p>
    </div>
    <div class="feature">
      <img src="cimorybotol.jpeg" alt="Yogurt Drink">
      <h2>Yogurt Drink</h2>
      <p>Yogurt drink dengan berbagai rasa buah-buahan seperti stroberi, peach, blueberry, mangga, atau melon, menambah kesegaran dan kelezatan minuman.</p>
    </div>
  </section>
  <footer id="footer">
    <p>&copy; 2024 Yogurt Yoummy. All Rights Reserved.</p>
    <p>Follow us on:
        <a href="https://www.instagram.com/mogiimud_?igsh=cnRrZW10bHRrOGM1">Instagram</a> |
        <a href="https://www.tiktok.com/@niecy_zyy?_t=8klkGHk80EZ&_r=1">Tiktok</a> 
    </p>
  </footer>

</body>
</html>
