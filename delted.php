
<?php
$mysqli = new mysqli('localhost', 'root', '', 'pengolahan_yogurt');
    $id=$_GET["id_username"];

    $result= mysqli_query($mysqli, "DELETE FROM user WHERE id_user='$id'");
    header("location:tabel.php")

?>