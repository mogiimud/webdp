<?php
// Koneksi ke database
$databasehost = "localhost"; // Ganti dengan host database Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$database = "pengolahan keju"; // Ganti dengan nama database Anda

$conn = new mysqli($databasehost, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Ambil data dari form
$name = $_POST['name'];
$comment = $_POST['comment'];

// Masukkan data ke database
$sql = "INSERT INTO comments (name, comment) VALUES ('$name', '$comment')";

if ($conn->query($sql) === TRUE) {
    echo "Komentar berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Tutup koneksi
$conn->close();
?>
