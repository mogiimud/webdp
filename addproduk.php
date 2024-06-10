<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Add New Product</h1>
        <form action="insertproduk.php" method="post">
    <label for="name_product">Product Name:</label>
    <input type="text" id="name_product" name="name_product" required>
    
    <label for="kategori">Category:</label>
    <input type="text" id="kategori" name="kategori" required>
    
    <label for="price">Price:</label>
    <input type="number" id="price" name="price" required>
    
    <label for="stock">Stock:</label>
    <input type="number" id="stock" name="stock" required>
    
    <input type="submit" value="Add Product">
</form>

    </div>
</body>
</html>
<style>
    body {
    margin: 0;
    padding: 0;
    font-family: "Poppins", sans-serif;
    background-color: #070F2B;
    color: #fff;
}

.container {
    width: 80%;
    margin: auto;
    overflow: hidden;
}

h1, h2 {
    text-align: center;
    color: #4CAF50;
}

table {
    width: 100%;
    font-size: 14px;
    color: black;
    background-color: whitesmoke;
    border-collapse: collapse;
}

table th, table td {
    padding: 10px;
    border: 1px solid #ccc;
}

table th {
    background-color: #4CAF50;
    color: white;
    text-align: center;
}

table td {
    text-align: center;
}

a {
    display: inline-block;
    color: #4CAF50;
    text-decoration: none;
    padding: 5px 10px;
    border: 1px solid #4CAF50;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
}

a:hover {
    background-color: #4CAF50;
    color: white;
}

form label {
    display: block;
    margin: 10px 0 5px;
}

form input[type="text"],
form input[type="number"],
form input[type="email"],
form input[type="password"],
form select {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

form button {
    display: inline-block;
    padding: 10px 20px;
    color: white;
    background-color: #4CAF
}
</style>