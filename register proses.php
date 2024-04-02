<?php
include 'kooneksi.php';

$nama = $_POST['nama']; 
$username = $_POST['username'];
$password = md5($_POST['password']);
$level = $_POST['level'];

$sql = "INSERT INTO `user`(`nama`, `username`, `password`, `level`) VALUES ('$nama','$username','$password','$level')";;
$result = mysqli_query($mysqli,$sql);
if($result){
    echo "<script>
            alert('Register successfully');
            document.location = 'tampilan login.php';
        </script>";
}else{
    echo "<script>
    alert('Register Failed');
    document.location = 'tampilan register.php';
</script>";


}
?>