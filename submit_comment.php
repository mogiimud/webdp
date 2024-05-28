<?php
// Koneksi ke database
$databasehost = "localhost"; // Ganti dengan host database Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$database = "pengolahan_yogurt"; // Ganti dengan nama database Anda

$conn = new mysqli($databasehost, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $nama = $_POST['nama'];
    $comment = $_POST['comment_text'];

    // Prepare and bind SQL statement with inner join
    $stmt = $conn->prepare("INSERT INTO comment (id_user, comment_text) 
                            SELECT id_user, ? FROM user WHERE nama = ?");
    $stmt->bind_param("ss", $comment, $nama);

    // Execute the statement
    if ($stmt->execute() === TRUE) {
        echo "Komentar berhasil ditambahkan.";
    } else {
        echo "Error: " . $conn->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
=======

