<?php
include("conn.php");
$id=$_GET['id'];
$name = $_POST["name"];
//    alert($name);
//    die();
   
$email = $_POST["email"];
$password = $_POST["password"];
  


$query = "UPDATE  Employee SET Name='$name',Email='$email', 
Password='$password' WHERE ID= '$id'";
$data  = mysqli_query($conn, $query);
     
if (data) {
    echo("data is updated");
    header("Location://localhost/ajax/show.php");
    exit;
} 
else{
    echo("data is not updated");
}   
   
  


?>