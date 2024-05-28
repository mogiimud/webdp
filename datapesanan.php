<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
</head>
<body>
<a href="admin.php">BACK</a>
    <div class="container">
        <h1>Order Details</h1>
        <table>
            <thead>
            <tr>
                <th>Order ID</th>
                <th>Customer Name</th>
                <th>Address</th>
                <th>Order Date</th>
                <th>Product ID</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total Price</th>
            </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "pengolahan_yogurt";
                
                // Create connection
                $mysqli = new mysqli($servername, $username, $password, $dbname);
                
                // Check connection
                if ($mysqli->connect_errno) {
                    die("Connection failed: " . $mysqli->connect_error);
                }

                // Query untuk mengambil data pesanan
                $sql = "SELECT 
                    `order`.Order_id,
                    customer.Nama,
                    customer.Alamat,
                    `order`.Order_date,
                    products.product_id,
                    products.kategori,
                    orderdetails.Quantity,
                    products.price,
                    (orderdetails.Quantity * products.price) AS TotalPrice
                FROM 
                    `order`
                INNER JOIN customer ON `order`.Customer_id = customer.Customer_id
                INNER JOIN orderdetails ON `order`.Order_id = orderdetails.Order_id
                INNER JOIN products ON orderdetails.product_id = products.product_id";

                $result = $mysqli->query($sql);

                // Periksa apakah ada data yang ditemukan
                if ($result->num_rows > 0) {
                    // Tampilkan data
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["Order_id"] . "</td>";
                        echo "<td>" . $row["Nama"] . "</td>";
                        echo "<td>" . $row["Alamat"] . "</td>";
                        echo "<td>" . $row["Order_date"] . "</td>";
                        echo "<td>" . $row["product_id"] . "</td>";
                        echo "<td>" . $row["kategori"] . "</td>";
                        echo "<td>" . $row["Quantity"] . "</td>";
                        echo "<td>$" . $row["price"] . "</td>";
                    echo "<td>$" . $row["TotalPrice"] . "</td>";
                    echo "</tr>";

                    }
                } else {
                    echo "<tr><td colspan='9'>No orders found</td></tr>";
                }

                // Tutup koneksi
                $mysqli->close();
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