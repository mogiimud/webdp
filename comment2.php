<?php
session_start();
include 'kooneksi.php';

// Mengambil data komentar dari database dengan inner join ke tabel users
$query_comments = "
    SELECT comments.comment_text, comments.comment_date, users.username 
    FROM comments 
    INNER JOIN users ON comments.id_user = users.id_user 
    ORDER BY comments.comment_date DESC";
$result_comments = mysqli_query($mysqli, $query_comments);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambahkan Komentarmu</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Tambahkan Komentarmu Tentang Websiteku</h1>
    <div class="comment-section">
        <h2>YUK YUK</h2>
        <form action="submit_comment.php" method="POST">
            <label for="comment_text">Komentar:</label><br>
            <textarea id="comment_text" name="comment_text" required></textarea><br><br>
            <button type="submit">Kirim Komentar</button>
        </form>

        <h2>Komentar Pengguna</h2>
        <?php
        if (mysqli_num_rows($result_comments) > 0) {
            while ($row = mysqli_fetch_assoc($result_comments)) {
                echo "<div class='comment'>";
                echo "<h3>" . htmlspecialchars($row['username']) . "</h3>";
                echo "<p>" . htmlspecialchars($row['comment_text']) . "</p>";
                echo "<small>" . $row['comment_date'] . "</small>";
                echo "</div>";
            }
        } else {
            echo "<p>Belum ada komentar.</p>";
        }
        ?>
    </div>
    <a href="landing_ku2.php">KEMBALI</a>
</body>
</html>

<style>
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 100vh;
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
.comment-section {
    width: 60%;
    background-color: #ffe6f0;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    text-align: center;
    margin-bottom: 20px;
}

h1, h2 {
    color: #ff69b4;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
}

form {
    margin-bottom: 20px;
}

label {
    font-weight: bold;
    color: #333;
}

textarea {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ff69b4;
    border-radius: 5px;
}

button {
    padding: 10px 20px;
    background-color: #ff69b4;
    color: white;
    border: none;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    cursor: pointer;
    transition: background-color 0.3s, box-shadow 0.3s;
}

button:hover {
    background-color: #ff1493;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.comment {
    background: linear-gradient(145deg, #ffccdd, #ff99bb);
    box-shadow: 5px 5px 10px #d4a5a5, -5px -5px 10px #ffefff;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
    text-align: left;
}

.comment h3 {
    margin: 0;
    color: #ff69b4;
}

.comment p {
    color: #333;
}

.comment small {
    color: #999;
    display: block;
    margin-top: 10px;
}
</style>
