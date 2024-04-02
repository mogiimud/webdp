<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }
    .navbar{
    width: 90%;
    padding: 30px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.navbar ul li{
    list-style: none;
    display: inline-block;
    margin: 20px;
}
.navbar ul li a{
    text-decoration: none;
    text-transform: uppercase;
    color: rgb(255, 241, 241);
    font-weight: 600;
}
li a:hover{
    background: rgb(255, 255, 255);
    transition: 0,5s;
}
.navbar a:hover{
    color: rgb(0, 0, 0);
}

    #header {
      background-color: #333;
      color: #fff;
      padding: 20pxrem;
    }

    #banner {
      height: 70vh;
      background-image: url('wppyogurtt.jpg');
      background-position: center;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      color: ;
      font-size: 50px;
      text-align: center;
    }

    #features {
      padding: 2rem;
      display: flex;
      justify-content: space-between;
    }

    #features .feature {
      flex-basis: 30%;
      text-align: center;
    }

    #features .feature img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      margin-bottom: 1rem;
    }

    #pricing {
      padding: 2rem;
      display: flex;
      justify-content: space-between;
    }

    #pricing .price {
      background-color: #333;
      color: #fff;
      padding: 1rem;
      text-align: center;
    }

    #video {
      padding: 2rem;
      height: 50vh;
      overflow: auto;
    }

    #video iframe {
      width: 100%;
      height: 50vh;
    }

    footer {
      background-color: #333;
      color: #fff;
      padding: 1rem;
      text-align: center;
    }
  </style>
</head>
<body>
  <header id="header">
    <h1>YOGURT YUMMY - YUMMY !</h1>
    <div class="navbar">
         
         <ul>
             <li><a href="landingpage.php">BACK</a></li>
             <li><a href="tentangkami.php">Tentang kami</a></li>
             <li><a href="yogurt.php">Materi Yogurt</a></li>
             <li><a href="jenis Kejuu.php">jenis keju</a></li>
             <li><a href="perindustri.php">industri</a></li>

         </ul>
         
     </div>
  </header>

  <section id="banner">
    <h1>YOGURT DELIGHTS</h1>
  </section>

  <section id="features">
    <div class="feature">
      <img src="yogurt flavo.jpg" alt="Feature 1">
      <h2>YOGURT FLAVORED</h2>
      <p>Ada berbagai varian yogurt yang diberi rasa, seperti yogurt lemon, yogurt jeruk, atau yogurt mango, yang menawarkan variasi rasa yang menyegarkan dan menyenangkan..</p>
    </div>
    <div class="feature">
      <img src="yogurtgreen.png" alt="Feature 2">
      <h2>YOGURT TINGGI PROTEIN</h2>
      <p>Yogurt yang diperkaya dengan protein tambahan, seperti protein whey atau protein kedelai, menawarkan rasa yang kaya dan nutrisi tambahan bagi mereka yang membutuhkan asupan protein yang lebih tinggi.</p>
    </div>
    <div class="feature">
      <img src="yogurtdrink.jpg" alt="Feature 3">
      <h2>YOGURT DRINK</h2>
      <p>Yogurt drink yang memiliki rasa buah-buahan, seperti stroberi, peach, blueberry, mangga, atau melon. Rasa buah menambah kesegaran dan kelezatan minuman.</p>
    </div>
  </section>
  
</html>

       