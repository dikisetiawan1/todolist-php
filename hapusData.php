
<?php include 'koneksi.php'?>

<?php

$id=$_GET['id'];
$deleted = mysqli_query($conn,"DELETE FROM todo where id=$id");

header('Location:index.php');
?>