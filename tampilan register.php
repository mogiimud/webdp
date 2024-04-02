<body>
    <link rel="stylesheet" href="tampilan register.css">
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
