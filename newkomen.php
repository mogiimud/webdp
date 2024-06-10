<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Comments</title>
</head>
</head>
<body>
<a href="admin.php">BACK</a>
    <h1>User Comments</h1>
    <table>
        <thead>
            <tr>
                <th>Comment ID</th>
                <th>User Name</th>
                <th>Comment Text</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
        <?php
        include("kooneksi.php");

        // Check connection
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        // Fetch comments with user information
        $sql = "SELECT 
                    comments.id_comment,
                    users.name AS username,
                    comments.comment_text,
                    comments.comment_date
                FROM 
                    comments
                INNER JOIN 
                    users
                ON 
                    comments.id_user = users.id_user";

        $mysqli = $mysqli->query($sql);

        if ($mysqli->num_rows > 0) {
            while ($row = $mysqli->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['id_comment']) . "</td>";
                echo "<td>" . htmlspecialchars($row['username']) . "</td>";
                echo "<td>" . htmlspecialchars($row['comment_text']) . "</td>";
                echo "<td>" . htmlspecialchars($row['comment_date']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No comments found.</td></tr>";
        }

        // Close connection
        $mysqli->close();
        ?>
        </tbody>
    </table>
</body>
</html>

<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #ffe6f2;
    margin: 0;
    padding: 0;
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
.container {
    width: 80%;
    margin: 50px auto;
    overflow: hidden;
    background-color: #ffccf2; /* Mengubah warna latar belakang container */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Menambahkan bayangan dengan efek tiga dimensi */
    border-radius: 10px;
    padding: 20px;
}

h1 {
    text-align: center;
    color: #ff4da6;
    margin: 20px 0;
    text-shadow: 1px 1px 2px #ff99cc;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Menambahkan bayangan dengan efek tiga dimensi */
}

table, th, td {
    border: 1px solid #ff99cc;
}

th, td {
    padding: 10px;
    text-align: left;
    background-color: #ffb3d9; /* Mengubah warna latar belakang sel header */
    color: #fff; /* Mengubah warna teks */
    box-shadow: inset 0 0 10px rgba(255, 255, 255, 0.3); /* Memberikan efek tiga dimensi pada sel */
}

th {
    background-color: #ff4da6; /* Mengubah warna latar belakang sel header */
    text-shadow: 1px 1px 2px #ff99cc;
    box-shadow: inset 0 4px 6px rgba(255, 77, 166, 0.6); /* Memberikan efek tiga dimensi pada sel header */
}

tbody tr:nth-child(even) {
    background-color: #ff99cc; /* Mengubah warna latar belakang baris ganjil */
}

tbody tr:hover {
    background-color: #ff66b3; /* Mengubah warna latar belakang saat hover */
    cursor: pointer;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Menambahkan bayangan dengan efek tiga dimensi */
}

td {
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}

table {
    border-radius: 10px;
    overflow: hidden;
}

thead tr {
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3); /* Menambahkan bayangan dengan efek tiga dimensi */
}
</style>