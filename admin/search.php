<?php
require_once "../connection.php";
//include "search.html";

?>
<table class="table table-border">
   
    <tbody>
        
    <?php 
    if(isset($_POST['search'])){
        $keyboard=$_POST['keyboard'];
         $query=$pdo->prepare("SELECT * FROM masterlogin where username LIKE '$keyboard' or email like '$keyboard'  ");
$query->execute();

while($row=$query->fetch()) {?>
 <thead class="alert-info">
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
            

        </tr>
    </thead>
<tr>
    <td><?php  echo $row['id'];?></td>
    <td><?php  echo $row['username'];?></td>
    <td><?php  echo $row['email'];?></td>
    <td><?php  echo $row['password'];?></td>
    <td><?php  echo $row['role'];}?></td>
    
</tr>
<?php    }
    
    ?>
   
    </tbody>
</table>