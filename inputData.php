<?php


// input data to database

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $sqls = "INSERT INTO todo (name)
    VALUES ('$name')";
    if (mysqli_query($conn, $sqls)) {
       echo " <p class='succ'>New record has been added successfully !</p>";
    } else {
       echo "Error: " . $sqls . ":-" . mysqli_error($conn);
    }
 
}?>