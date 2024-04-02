<?php
// Database connection
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "pengolahan keju";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Retrieve product information
$product_id = 1; // Replace with the actual product ID
$sql = "SELECT * FROM products WHERE id = $product_id";
$result = $conn->query($sql);

// Output product information
if ($result->num_rows > 0) {
	$product = $result->fetch_assoc();
	$image_url = $product["image_url"];
	$description = $product["description"];
	$price = $product["price"];
} else {
	echo "Product not found.";
}

// Close database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Product Page</title>
	<style>
		body {
			font-family: Arial, sans-serif;
		}
		
		h1 {
			text-align: center;
		}
		
		.product-image {
			display: block;
			margin: 0 auto;
			width: 50%;
		}
		
		.product-description {
			text-align: center;
			margin-top: 20px;
		}
		
		.product-price {
			text-align: center;
			font-size: 24px;
			font-weight: bold;
			color: #f00;
			margin-top: 20px;
		}
	</style>
</head>
<body>
	<h1>Product Name</h1>
	<img src="<?php echo $image_url; ?>" alt="Product Image" class="product-image">
	<div class="product-description">
		<?php echo $description; ?>
	</div>
	<div class="product-price">
		$<?php echo $price; ?>
	</div>
</body>