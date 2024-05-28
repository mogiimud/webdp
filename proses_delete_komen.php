<?php
$mysqli = new mysqli('localhost', 'root', '', 'pengolahan_yogurt');
    $id=$_GET["id"];

    $result= mysqli_query($mysqli, "DELETE FROM comments WHERE id='$id'");
    header("location:crudkomen.php")

?>