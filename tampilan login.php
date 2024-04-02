<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman Login</title>
    <link rel="stylesheet" href="tampilan login.css">
    
</head>
<body>
    <div class="container">
        <h1>Log-in</h1><br>
        <form action="menangani login.php" method="post"> 
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" class="button">Login</button>
        </form>
        <div class="forgot">
            <a href="tampilan register.php">Register</a> <a href="#">Forgot Password</a>
        </div>
    </div>
</body>
</html>