
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<?php


// input data to database

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $sqls = "INSERT INTO todo (name)
    VALUES ('$name')";
    if (mysqli_query($conn, $sqls)) {
       echo " <p class='alert alert-success'>New record has been added successfully !</p>";
    } else {
       echo "Error: " . $sqls . ":-" . mysqli_error($conn);
    }
 
}?>
</body>
</html>

