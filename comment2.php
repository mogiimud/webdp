<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Komentar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffe6f0; /* Background warna pink muda */
        }
        a {
            display: inline-block;
            margin: 5px;
            padding: 5px;
            background-color: #ff66b2; /* Warna pink */
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: transform 0.3s;
        }
        a:hover {
            background-color: #ff99cc; /* Warna pink lebih terang */
            transform: scale(1.1); /* Efek 3D bergerak */
        }
        .comment-section {
            margin-bottom: 30px;
        }
        h1, h2 {
            font-weight: bold;
            margin-top: 0;
            margin-bottom: 10px;
            color: #ff0066; /* Warna pink */
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], textarea {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(255, 0, 102, 0.3); /* Efek 3D bayangan pink */
        }
        button[type="submit"] {
            background-color: #ff66b2; /* Warna pink */
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.3s;
        }
        button[type="submit"]:hover {
            background-color: #ff99cc; /* Warna pink lebih terang */
            transform: scale(1.1); /* Efek 3D bergerak */
        }
        #comments {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .comment {
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            box-shadow: 0 0 10px rgba(255, 0, 102, 0.3); /* Efek 3D bayangan pink */
            transition: transform 0.3s;
        }
        .comment:hover {
            transform: scale(1.05); /* Efek 3D bergerak */
        }
        .comment-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .comment-name {
            font-weight: bold;
            color: #ff0066; /* Warna pink */
        }
        .comment-date {
            font-size: 12px;
            color: #666;
        }
        .comment-text {
            margin-top: 10px;
            white-space: pre-wrap;
        }
    </style>
</head>
<body>
    <h1>TAMBAHKAN KOMENTARMU TENTANG WEBSITEKU</h1>
    <div class="comment-section">
        <h2>YUK YUK</h2>
        <form action="submit_comment.php" method="POST">
            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="nama" required><br>
            <label for="comment_text">Komentar:</label><br>
            <textarea id="comment_text" name="comment_text" required></textarea><br><br>
            <button type="submit">Kirim Komentar</button>
        </form>
    </div>
    <a href="landingku2.php">KEMBALI</a>
</body>
</html>
