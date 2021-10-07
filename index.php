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
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
          
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="password">
        </div>
       
        <button type="button" class="btn btn-primary" name ="submit" id="submit" >Submit</button>
      </form>
</body>
</html>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function () {
      $("#submit").click(function () {
      
        name  = $("#name").val();
        email = $("#email").val();
        password = $("#password").val();
        if (name == "") {
          alert("Name is Required");
          return false;
        }
        else if(email == ""){
          alert("Email is Required");
          return false;
        }
        else if(password == ""){
          alert("Password is Required");
          return false;
        }
       
      
        $.ajax({
              type: "POST",
              url: "save.php",
              data:  {name: name, email: email, password: password},
              success: function(data) {
                  alert(data);
                
                  window.location=("show.php");

                }
               
                
    });
});
});

    
</script>