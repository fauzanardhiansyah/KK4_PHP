<?php
include 'konek.php';
$id = $_POST['id'];
$username = $_POST['username'];
$fullname = $_POST['fullname'];
$password = $_POST['password'];
$level = $_POST['level'];
 $sql_insert="INSERT INTO user VALUES ('$id','$username','$full name','$password', '$level')";
 mysqli_query($conn,$sql_insert)or die(mysqli_error($conn));
 echo '<script>
alert("Data Berhasil Disimpan");
location="index.php?"
</script>';
?>