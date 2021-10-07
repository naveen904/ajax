<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function () {
  
  
      
        $.ajax({
              type: "POST",
              url: "delete.php/?id=<?=$_GET['id']?>",
              data: {},
              success: function(data) {
                alert(data);
              
                }
    });
  
});
</script>