<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Komentar</title>
</head>
<body>
    <h1>Forum Komentar</h1>
    
    <div class="comment-section">
        <h2>Tambah Komentar</h2>
        <form action="submit_comment.php" method="POST">
            <label for="name">Nama:</label><br>
            <input type="text" id="name" name="name" required><br>
            <label for="comment">Komentar:</label><br>
            <textarea id="comment" name="comment" required></textarea><br><br>
            <button type="submit">Submit Komentar</button>
        </form>
    </div>

    <div class="comment-section">
        <h2>Komentar Terbaru:</h2>
        <div id="comments">
            <!-- Komentar akan ditampilkan di sini -->
        </div>
    </div>
    <a href="yogurt6.php">BACK</a>
</body>
</html>
<style>
  body {
  font-family: Arial, sans-serif;
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}
a {
    display: inline-block;
    margin: 5px;
    padding: 5px;
    background-color: #333;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
}

a:hover {
    background-color: #555;
}

.comment-section {
  margin-bottom: 30px;
}

h1, h2 {
  font-weight: bold;
  margin-top: 0;
  margin-bottom: 10px;
}

form {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

label {
  font-weight: bold;
}

input[type="text"],
textarea {
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

button[type="submit"] {
  background-color: #007bff;
  color: #fff;
  padding: 10px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
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
}

.comment-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.comment-name {
  font-weight: bold;
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