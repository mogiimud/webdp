<title>View Table</title>
<body>
<a href="tampilan login.php">BACK</a>
<br>
<table border="1" class="table">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Password</th>
        <th colspan ="2">Aksi</th>
    </tr>
</body>
<?php
//select tabel user dari database
$nomor = 1;
//echo $nomor;
include 'kooneksi.php';
$query_mysql =mysqli_query($mysqli, "SELECT * FROM user ") or die (mysqli_error());

while($data = mysqli_fetch_array($query_mysql)){
    ?>
<tr>
    <td><?php echo $nomor++; ?></td>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['username']; ?></td>
    <td><?php echo $data['password']; ?></td>
    <td> <span class="action_btn">
    <td> <span><a href='delete.php?id_user=<?php echo $data["id_user"];?>'>Hapus</a></span></td>
    <td> <span><a href='proses_edit.php?id_user=<?php echo $data["id_user"];?>'>Edit</a></span></td>
    <?php
}?>
</tr>
</form>
</table>

<style>
     body{
        margin: 40px;
        font-family: "poppins", "sans-serif";
        background-color: #070F2B;
    }
    table{
        width: 100%;
        font-size: 14px;
        color: black;
        white-space: nowrap;
        text-align: center;
        background-color: whitesmoke;
    }
    a {
  display: inline-block;
  padding: 5px 10px;
  background-color: #4CAF50; 
  color: white; 
  text-decoration: none; 
  border-radius: 5px;
  border: none; /
  cursor: pointer; 
  transition: background-color 0.3s; 
}
a:hover {
  background-color:  #45a049; 
}

</style>