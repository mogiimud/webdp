
<?php

//koneksi database
include_once("kooneksi.php");

//get id from URL to delete that user
$id_user = $_GET['id_user'];

//deleted user row from table based on given is
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id_user = '$id_user'");

//after delete redirect to home, so that latest user list will be displayed
header("location:tabel.php");
?>


