<!DOCTYPE html>
<div hidden>
  <?php include 'koneksi.php'?>
</div>






<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>TodoList App</title>
</head>
<style>
 
</style>
<body>
    

<h1 class="text-center">Todolist Today!</h1>
<div class="container-fluid mt-5">
  <div class="row justify-content-center">
    <div class="col-4">

    <form class="mb-5" action="" method="post">

    <div class="row">
      <div class="col-10">
        <input type="text" name="name" id="name" class="form-control">
      </div>
      <div class="col-2">
        <button type="submit" name="submit" class="btn btn-primary">Add+</button>

      </div>
    </div>
</form>
<?php include 'inputData.php'?>



<?php

// show data from database
$sql = "SELECT * FROM todo";
$data = $conn->query($sql);
if ($data->num_rows > 0) {
    // output data of each row

    echo"<table class='table table-hover'>";
    echo"<thead class='text-center fs-5 fw-bold'>";
    echo"<tr class=''>";
    echo"<td>No</td>";
    echo"<td>Nama</td>";
    echo"<td colspan='2'>Aksi</td>";
    echo"<td></td>";
    echo"<td></td>";
    echo"</tr>";
    echo"</thead>";

    $no = 0;
    while($row = mysqli_fetch_object($data)) {

      $no++;
      echo"<tbody>";
      echo "<tr>";
      echo"<td>$no</td>";
      echo"<td>$row->name</td>";
      echo"<td><button class='btn btn-primary' id='ubah' onclick='ubahBg()'>Done!</button></td> ";
      echo"<td><a class='btn btn-warning ' href=ubahData.php?id=$row->id>Update! </a></td> ";
      echo"<td><a class='btn btn-danger ' href=hapusData.php?id=$row->id>Delete!</a></td> ";
      echo "</tr>";
      echo"</tbody>";
      

      
    }
  } else {
    echo "0 results";
  }

  echo"</table>";
  $conn->close();
?>

    </div>
  </div>
</div>
<script>
  const ubah = document.querySelector('#ubah');


  function ubahBg(){
    ubah.style.backgroundColor ="green";
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>