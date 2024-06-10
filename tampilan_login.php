
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman Login</title>
    </head>
<body>
    <div class="container">
        <h1>Log-in</h1><br>
        <form action="menangani_login.php" method="post"> 
            <input type="text" name="username" placeholder="username" required>
            <input type="password" name="password" placeholder="password" required>
            <input type="email" name="email" placeholder="email" required>
            <button type="submit" class="button">Login</button> 
        </form>
        <div class="forgot">
          <p>Belum daftar? <a href="tampilan_register.php">Daftar Yukk</a></p>
          <p><a href="#">Forgot Password</a></p>
        </div>
    </div>
</body>
</html>
<style>
@keyframes float {
    0% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-10px);
    }
    100% {
        transform: translateY(0px);
    }
}

body {
    background-color: #ffe6f2;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    background-color: #ffb3d9;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(255, 105, 180, 0.5), 0 6px 20px rgba(255, 105, 180, 0.3);
    text-align: center;
    animation: float 3s ease-in-out infinite;
}

h1 {
    color: #ff66b2;
}

input[type="text"],
input[type="password"],
button {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ff99cc;
    border-radius: 5px;
    box-shadow: inset 0 2px 4px rgba(255, 105, 180, 0.2);
    outline: none;
    animation: float 3s ease-in-out infinite;
}
 
input[type="text"],
input[type="email"],
button {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ff99cc;
    border-radius: 5px;
    box-shadow: inset 0 2px 4px rgba(255, 105, 180, 0.2);
    outline: none;
    animation: float 3s ease-in-out infinite;
}

input[type="text"]:focus,
input[type="password"]:focus,
button:focus {
    border-color: #ff66b2;
    box-shadow: 0 0 8px rgba(255, 105, 180, 0.5);
}

.button {
    background-color: #ff66b2;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    box-shadow: 0 4px 8px rgba(255, 105, 180, 0.5), 0 6px 20px rgba(255, 105, 180, 0.3);
    transition: background-color 0.3s ease;
}

.button:hover {
    background-color: #ff3385;
}

.forgot {
    margin-top: 15px;
}

.forgot a {
    color: #ff66b2;
    text-decoration: none;
    margin: 0 10px;
    animation: float 3s ease-in-out infinite;
}

.forgot a:hover {
    color: #ff3385;
}
</style>

