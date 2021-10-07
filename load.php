<?php
include("conn.php");
$query = "SELECT * from Employee";
$data  =mysqli_query($conn,$query);
$total  =mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
//echo $result['Id'];

if($total>0){
    
    //echo "table have data";
   while($result = mysqli_fetch_assoc($data)){?>
    <table>
    
    <tr>
       <th><?=$result['ID']?></th>
       <th><?=$result['Name']?></th>
       <th><?=$result['Email']?></th>
       <th><?=$result['Password']?></th>

       <td><a href="update.php?id=<?=$result['ID'];?>">Edit</a></td>
            <td><a href="delete.php?id=<?=$result['ID'];?>">Delete</a></td>
       </tr>
       
       </table>
       <?php      
   }
}
else{
    echo "no data found";
}

?>


    