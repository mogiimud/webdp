<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PENGOLAHAN KEJU</title>
</head>
<body>
    <div class="banner">
        <video autoplay loop muted plays-inline>
            <source src="pinkyy.mp4" type="video/mp4">
        </video>

        <div class="content">
            <h1>Welcome To Yogurt Lovers</h2>
            <p>"Selamat datang di website kami bagi para pecinta yogurt sejati!</p>
            <p> Bersiaplah untuk menjelajahi dunia rasa yang tiada tara </p>
            <p> dan memperkaya pengalaman yogurt Anda bersama kami.</p>
            <p> Selamat menikmati dan bersenang senang"</p>
            <p>"Tak ada yang bisa menyamai kelezatan yogurt,</p>
            <p> setiap gigitan adalah petualangan rasa yang tak terlupakan"</p>
            <li><a href="tampilan_login.php">Login</a></li>
        </div>
    </div>
</body>
</html>
<style>
    body {
    margin: 0;
    font-family: Arial, sans-serif;
}

.banner {
    position: relative;
    height: 100vh;
    overflow: hidden;
}

.banner video {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transform: translate(-50%, -50%);
}

.navbar{
    width: 90%;
    padding: 30px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.logo{
    width: 10px;
    margin-top: -10PX;
    cursor: pointer;
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

.content {
    position: absolute;
    top: 50%;
    left: 50px;
    transform: translateY(-50%);
    color: white;
    text-align: left;
}

.content h1 {
    margin: 0;
    font-size: 48px;
}

.content h2 {
    margin: 10px 0;
    font-size: 36px;
}

.content p {
    margin: 10px 0;
    font-size: 18px;
}
a {
  display: inline-block;
  padding: 5px 10px;
  background-color: #4CAF50; 
  color: white; 
  text-decoration: none; 
  border-radius: 5px;
  border: none; /
  cursor: pointer; 
  transition: background-color 0.3s; 
}
a:hover {
  background-color:  #45a049; 
}
</style>
