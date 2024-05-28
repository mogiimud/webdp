<body>
    <div class="container">
        <h1>Register</h1>
        <form action="register proses.php" method="post" name="form1">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="teks" name="nama" required></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="teks" name="username" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td>level</td>
                    <td>
                        <select name="level" id="level" required>
                        <option disabled selected>Pilih </option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                        </select>
                      </td>
                </tr>
                <tr>
                    <tr>
                        <td></td>
                        <td><button class="btn"  name="Submit">Register</button></td>
                        <a href="tampilan login.php">
                    </tr>    
                </table>
          </form>
</div>
</body>
<style>
@keyframes float {
    0% {
        transform: translatey(0px);
    }
    50% {
        transform: translatey(-10px);
    }
    100% {
        transform: translatey(0px);
    }
}

@keyframes wobble {
    0%, 100% {
        transform: rotate(-3deg);
    }
    50% {
        transform: rotate(3deg);
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
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(255, 105, 180, 0.5), 0 6px 20px rgba(255, 105, 180, 0.3);
    text-align: center;
    animation: float 3s ease-in-out infinite, wobble 2s ease-in-out infinite;
}

h1 {
    color: #ff66b2; /* Darker pink for heading */
}

table {
    margin: 0 auto;
}

td {
    padding: 10px;
    color: #ff66b2;
}

input[type="text"],
input[type="password"],
select {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ff99cc; /* Pink border */
    border-radius: 5px;
    box-shadow: inset 0 2px 4px rgba(255, 105, 180, 0.2);
    outline: none;
    animation: float 3s ease-in-out infinite;
}

input[type="text"]:focus,
input[type="password"]:focus,
select:focus {
    border-color: #ff66b2; /* Darker pink border on focus */
    box-shadow: 0 0 8px rgba(255, 105, 180, 0.5);
}

.btn {
    background-color: #ff66b2; /* Darker pink for button */
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    box-shadow: 0 4px 8px rgba(255, 105, 180, 0.5), 0 6px 20px rgba(255, 105, 180, 0.3);
    transition: background-color 0.3s ease;
    animation: float 3s ease-in-out infinite, wobble 2s ease-in-out infinite;
}

.btn:hover {
    background-color: #ff3385; /* Even darker pink on hover */
}

.back-to-login {
    margin-top: 15px;
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
