<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back To PHP language</title>
</head>
<style>
    .conn{
        color: red;
        visibility: hidden;
    }

    .succ{  color: green;}
</style>
<body>
    

<h1>Todolist Today!</h1>

<form action="" method="post">
    <label for="name">Activity</label>
    <input type="text" name="name" id="name">
    <button type="submit" name="submit">Add+</button>
</form>

<?php include 'koneksi.php'?>
<?php include 'inputData.php'?>
<?php include 'hapusData.php'?>


<?php

// show data from database
$sql = "SELECT * FROM todo";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<ul>";
      echo "<li>". $row["name"]. " <a href=''>Delete!</a></li>";
      echo "</ul>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
?>


</body>
</html>