<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Comments</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="admin.php">BACK</a>
    <div class="container">
        <h1>User Comments</h1>
        <table>
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Comment ID</th>
                    <th>Comment Text</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
            <?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pengolahan_yogurt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT 
            user.id_user,
            user.username,
            user.nama,
            comment.id_comment,
            comment.comment_text,
            comment.created_at
        FROM 
            user
        INNER JOIN 
            comment
        ON 
            user.id_user = comment.id_user";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id_user'] . "</td>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['nama'] . "</td>";
        echo "<td>" . $row['id_comment'] . "</td>";
        echo "<td>" . $row['comment_text'] . "</td>";
        echo "<td>" . $row['created_at'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>No comments found.</td></tr>";
}

$conn->close();
?>

            </tbody>
        </table>
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