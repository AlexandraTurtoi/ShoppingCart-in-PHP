
 <h1>User Page</h1>
    
    <h3>
    <?php
     session_start();
   
     if(!isset($_SESSION['user_login'])) //check unauthorize user not direct access in "admin_home.php" page
     {
      header("location: ../index.php");  
     }
   
     if(isset($_SESSION['employee_login'])) //check employee login user not access in "admin_home.php" page
     {
      header("location: ../employee/employee_home.php"); 
     }
   
     if(isset($_SESSION['admin_login'])) //check user login user not access in "admin_home.php" page
     {
      header("location: ../admin/admin_home.php");
     }
     
     if(isset($_SESSION['user_login']))
     {
     ?>
      Welcome,
     <?php
      echo $_SESSION['user_login'];
     }
     ?>
    </h3>
     <a href="../logout.php">Logout</a>
   