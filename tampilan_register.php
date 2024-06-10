<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <form action="register_proses.php" method="post" name="form1">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea name="address" rows="4" cols="50" required></textarea></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="phone" required></td>
                </tr>
                <tr>
                    <td>Level</td>
                    <td>
                        <select name="level" id="level" required>
                            <option disabled selected>Pilih</option>
                            <option value="user">user</option>
                            <option value="admin">admin</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button class="btn" name="Submit" type="submit">Register</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>

<style>
 @keyframes float {
    0% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-5px);
    }
    100% {
        transform: translateY(0px);
    }
}

body {
    background-color: #ffe6f2; /* Pink background */
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    background-color: #ffb3d9; /* Pink background for container */
    padding: 10px;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(255, 105, 180, 0.5), 0 4px 8px rgba(255, 105, 180, 0.3);
    text-align: center;
    animation: float 3s ease-in-out infinite;
}

h1 {
    font-size: 24px;
    color: #ff66b2; /* Darker pink for heading */
}

table {
    margin: 0 auto;
}

td {
    padding: 8px;
    color: #ff66b2;
}

input[type="text"],
input[type="password"],
input[type="email"],
select {
    width: calc(100% - 20px);
    padding: 8px;
    margin: 8px 0;
    border: 1px solid #ff99cc; /* Pink border */
    border-radius: 5px;
    box-shadow: inset 0 1px 2px rgba(255, 105, 180, 0.2);
    outline: none;
    animation: float 3s ease-in-out infinite;
    font-size: 14px;
}

input[type="text"]:focus,
input[type="password"]:focus,
input[type="email"]:focus,
select:focus {
    border-color: #ff66b2; /* Darker pink border on focus */
    box-shadow: 0 0 6px rgba(255, 105, 180, 0.5);
}

.btn {
    background-color: #ff66b2; /* Darker pink for button */
    color: white;
    padding: 8px 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    box-shadow: 0 2px 4px rgba(255, 105, 180, 0.5), 0 4px 8px rgba(255, 105, 180, 0.3);
    transition: background-color 0.3s ease;
    animation: float 3s ease-in-out infinite;
    font-size: 14px;
}

.btn:hover {
    background-color: #ff3385; /* Even darker pink on hover */
}

.back-to-login {
    margin-top: 10px;
    animation: float 3s ease-in-out infinite;
}

.back-to-login a {
    color: #ff66b2; /* Darker pink for links */
    text-decoration: none;
}

.back-to-login a:hover {
    color: #ff3385; /* Even darker pink on hover */
}
</style>