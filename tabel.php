<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Table</title>
    <style>
        body {
            margin: 40px;
            font-family: "Poppins", sans-serif;
            background-color: #ffccf2; /* Background pink muda */
            color: #000; /* Teks berwarna hitam untuk kontras */
        }

        table {
            width: 100%;
            font-size: 14px;
            color: black;
            white-space: nowrap;
            text-align: center;
            background-color: #ffe6f7; /* Background tabel pink sangat muda */
            border-collapse: collapse; /* Menggabungkan batas sel */
        }

        table th, table td {
            padding: 10px; /* Menambahkan ruang di antara sel */
            border: 1px solid #ff99cc; /* Warna batas sel pink */
        }

        table th {
            background-color: #ff66b2; /* Background kolom header pink */
            color: white;
            text-align: center;
        }

        table td {
            background-color: #ffcce6; /* Background sel tabel pink sangat muda */
            color: black; /* Warna teks hitam */
            text-align: center;
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
    </style>
</head>
<body>
    <a href="admin.php">BACK</a>
    <br>
    <table border="1" class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Alamat</th>
            <th>Phone</th>
            <th>Level</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php
        // Connect to the database
        include 'kooneksi.php';
        $query_mysql = mysqli_query($mysqli, "SELECT * FROM users") or die(mysqli_error($mysqli));
        $nomor = 1;
        while ($data = mysqli_fetch_array($query_mysql)) {
            echo "<tr>";
            echo "<td>".$nomor++."</td>";
            echo "<td>".$data['name']."</td>";
            echo "<td>".$data['username']."</td>";
            echo "<td>".$data['email']."</td>";
            echo "<td>".$data['password']."</td>";
            echo "<td>".$data['address']."</td>";
            echo "<td>".$data['phone']."</td>";
            echo "<td>".$data['level']."</td>";
            echo "<td><a href='delete.php?id_user=".$data["id_user"]."'>Hapus</a></td>";
            echo "<td><a href='edit_user.php?id_user=".$data["id_user"]."'>Edit</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

