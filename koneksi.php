


<?php



$servername = "localhost";
$db ="todos";
$username = "root";
$password = "";

//create connection to database 
$conn = new mysqli($servername,$username,$password,$db);

//check connection to database
if($conn -> connect_error){
die("error:". $conn ->connect_error);
}else{
    echo"<p class='conn'>Connected to database!</p>";
}


?>