<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Yogurt</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Daftar Produk Yogurt</h1>
        <div class="products">
            <?php
            // Koneksi ke database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "pengolahan_yoummy";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Query untuk mendapatkan data produk
            $sql = "SELECT * FROM Products";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='product'>";
                    echo "<h2>" . $row["name_product"] . "</h2>";
                    echo "<p>Price: $" . $row["price"] . "</p>";
                    echo "<p>Stock: " . $row["stock"] . "</p>";
                    echo "<p>Kategori: " . $row["kategori"] . "</p>";
                    echo "<form action='order.php' method='POST'>";
                    echo "<input type='hidden' name='product_id' value='" . $row["product_id"] . "'>";
                    echo "<label for='quantity'>Quantity:</label>";
                    echo "<input type='number' id='quantity' name='quantity' min='1' max='" . $row["stock"] . "' required>";
                    echo "<input type='submit' value='Order'>";
                    echo "</form>";
                    echo "</div>";
                }
            } else {
                echo "No products available.";
            }

            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
