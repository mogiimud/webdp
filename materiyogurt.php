<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Materi Yogurt</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <ul>
    <li><a href="landingku2.php">BACK</a></li>
  </ul>
  <div class="box-container">
    <?php
    include 'kooneksi.php';
    $query_mysql = mysqli_query($mysqli, "SELECT * FROM materi_yogurt ") or die(mysqli_error($mysqli));

    while ($data = mysqli_fetch_array($query_mysql)) { ?>
    <div class="box">
      <img src="<?php echo $data['foto'] ?>" alt="<?php echo $data['foto'] ?>">
      <div class="content">
        <h1><?php echo $data['title']?></h1>
        <p><?php echo $data['content']?></p>
        <p><?php echo $data['content2']?></p>
        <p><?php echo $data['content3']?></p>
      </div>
    </div>
    <?php } ?>
  </div>
</body>
</html>
<style>
     body {
  font-family: Arial, sans-serif;
  background-color: #ffe6f2;
  margin: 0;
  padding: 0;
}

ul {
  list-style-type: none;
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

.box-container {
  overflow: hidden; /* Clearfix untuk mengatasi float */
}
.box-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center; /* Memposisikan kotak di tengah */
  align-items: flex-start; /* Mulai dari bagian atas */
}

.box {
  width: 1000px;
  margin: 20px;
  padding: 20px;
  background-color: #ffccf2;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
  transition: transform 0.3s ease;
  float: left; /* Mengatur posisi ke samping */
}

.box:hover {
  transform: translate(0, -5px);
}

.box img {
  width: 100px; /* Sesuaikan lebar gambar sesuai kebutuhan */
  height: auto; /* Untuk memastikan gambar tetap proporsional */
  border-radius: 10px;
  margin-right: 20px;
}

h1 {
  margin: 0 0 10px; /* Menghapus margin bawah pada judul */
  font-size: 20px;
  color: #ff4da6;
}

p {
  margin: 0; /* Menghapus margin pada paragraf */
  color: #333;
  text-align: justify;
}

</style>