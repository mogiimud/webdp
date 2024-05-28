
<?php
include("kooneksi.php");

//kalau tidak ada id di query string
if( !isset($_GET['id_user']) ){
    header('Location: tabel.php');
}
$id_user = $_GET['id_user'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM user WHERE id_user=$id_user");

while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama'];
    $username = $user_data ['username'];
    $password = $user_data ['password'];
    $level = $user_data ['level'];
}
?>
<body>
    <header>
        <h3>Formulir Edit User</h3>
    </header>
    <form method="POST" action="proses_edit.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="teks" name="username" value="<?php echo $username;?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" value="<?php echo $password;?>"></td>
            </tr>
            <tr>
                <td>level</td>
                <td>
                    <select name="level" id="level" required>
                        <option disabled selected> <?php echo $level ?></option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_user" value=<?php echo $_GET['id_user'];?>></td>
                <td><input type="submit" name="simpan" value="simpan"></td>
            </tr>
        </table>
</form>
</body>
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
            text-align: left;
            background-color: #ffe6f7; /* Background tabel pink sangat muda */
            border-collapse: collapse; /* Menggabungkan batas sel */
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); /* Bayangan untuk efek 3D */
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
        }

        input[type="text"], input[type="password"], select {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            display: inline-block;
            border: 1px solid #ff99cc; /* Warna batas pink */
            border-radius: 4px; /* Sudut melengkung */
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #ff66b2; /* Background pink */
            color: white;
            padding: 10px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            box-shadow: 0 5px #ff3399; /* Bayangan untuk efek 3D */
            transition: all 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #ff3399; /* Warna background pink lebih gelap saat hover */
            box-shadow: 0 3px #ff0066; /* Mengurangi bayangan untuk efek 3D */
            transform: translateY(-2px); /* Efek naik saat hover */
        }

        input[type="submit"]:active {
            background-color: #ff0066; /* Warna background pink lebih gelap saat aktif */
            box-shadow: 0 2px #ff3399; /* Mengurangi bayangan lebih jauh */
            transform: translateY(2px); /* Efek turun saat aktif */
        }

        h3 {
            color: #ff3399; /* Warna teks pink lebih gelap */
        }
    </style>
