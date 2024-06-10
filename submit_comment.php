<?php
session_start();
include 'kooneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_user = $_SESSION['id_user'];
    $comment_text = $_POST['comment_text'];

    // Escape special characters in the comment
    $comment_text = mysqli_real_escape_string($mysqli, $comment_text);

    $query = "INSERT INTO comments (id_user, comment_text) VALUES ('$id_user', '$comment_text')";

    if (mysqli_query($mysqli, $query)) {
        header("Location: comment2.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
    }
}
?>
