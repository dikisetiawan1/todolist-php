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
    

<h1 class="text-center">Ubah Data!</h1>
<div class="container-fluid mt-5">
  <div class="row justify-content-center">
    <div class="col-4">

    <form class="mb-5" action="" method="post">

    <div class="row">
        <?php

$query ="SELECT * FROM todo";
$rows = $conn->query($query);

if($rows->num_rows>0){
    $no=0;
foreach($rows as $row)
{

    $no++;
   
    echo"<div class='col-10'>";
    echo "<input type='text' name='name' id='name' class='form-control' value= $row[name]>";
  echo "</div>";


};

}




?>
<div class="row mt-4">

    <div class="col-2">
        <button type="submit" name="submit" class="btn btn-primary">Change</button>
    
    </div>
</div>
        
  
    </div>
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>