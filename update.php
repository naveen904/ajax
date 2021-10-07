<?php 
include "conn.php";
$id = $_GET['id'];


$query = "SELECT * from Employee where ID= '$id'";
$data = mysqli_query($conn,$query);
// echo "<pre>";
// print_r($data);
// die();
$result = mysqli_fetch_assoc($data);
// echo "<pre>";s
// print_r($result);
// die();

$name = $result['Name'];
$email = $result['Email'];
$password = $result['Password'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" name="form" id="form">
        <div class="mb-3">
          <label for="exampleInput" class="form-label">Name</label>
          <input type="text" class="form-control" value="<?php echo $name;?>" name="name" id="name">
          
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Email</label>
          <input type="email" class="form-control" value="<?php echo $email;?>" name="email" id="email">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" value="<?php echo $password;?>" name="password" id="password">
        </div>
       
        <button type="submit" class="btn btn-primary" name ="update" id="update" >Update</button>
      </form>
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function () {
  
  $("#update").click(function () {
          
        name  = $("#name").val();
        email = $("#email").val();
        password = $("#password").val();
      
        $.ajax({
              type: "POST",
              url: "edit.php/?id=<?=$_GET['id']?>",
              data: {name: name, email: email, password: password},
              success: function(data) {
                alert(data);
               
                }
    });
  });
});
</script>