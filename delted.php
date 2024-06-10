
<?php
$mysqli = new mysqli('localhost', 'root', '', 'pengolahan_yummy');
    $id_user=$_GET["id_user"];

    $result= mysqli_query($mysqli, "DELETE FROM users WHERE id_user='$id_user'");
    header("location:delete.php")

?>