<?php
include("conn.php");

$name = $_POST["name"];
 
$email = $_POST["email"];
$password = $_POST["password"];

$query = "INSERT INTO Employee(Name,Email,Password) VALUES('$name', '$email', '$password')";


$data  = mysqli_query($conn, $query);
if($data){
    echo("data is submitted");
}
else{
    echo("not submitted");
}

?>

