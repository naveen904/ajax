<?php

include "conn.php";
$id = $_GET['id'];
//echo $id;
$query = "DELETE from Employee WHERE ID = '$id'";
  $data  = mysqli_query($conn, $query);
  if ($data) {
     echo("successfully deleted");
    header("Location://localhost/ajax/show.php");
    exit;
  }else {
    echo("not deleted");
}

  

?>