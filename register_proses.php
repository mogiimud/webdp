<?php
include 'kooneksi.php'; // Pastikan nama file koneksi benar dan file tersebut ada

// Validasi input
if (isset($_POST['name'], $_POST['username'], $_POST['email'], $_POST['password'], $_POST['address'], $_POST['phone'], $_POST['level'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = ($_POST['password']); // Anda bisa mengganti ini dengan password_hash
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $level = $_POST['level'];

    // Membuat query SQL untuk menyisipkan data ke dalam tabel user
    $sql = "INSERT INTO `users` (`name`, `username`, `email`, `password`, `address`, `phone`, `level`) VALUES ('$name', '$username', '$email', '$password', '$address', '$phone', '$level')";

    // Menjalankan query
    $result = mysqli_query($mysqli, $sql);

    // Mengecek hasil query
    if ($result) {
        echo "<script>
                alert('Register successfully');
                document.location = 'tampilan_login.php';
              </script>";
    } else {
        echo "<script>
                alert('Register Failed');
                document.location = 'tampilan_register.php';
              </script>";
    }

    // Menutup koneksi
    $mysqli->close();
} else {
    // Jika data tidak lengkap, tampilkan pesan kesalahan
    echo "<script>
            alert('Incomplete data');
            document.location = 'tampilan_register.php';
          </script>";
}
?>
