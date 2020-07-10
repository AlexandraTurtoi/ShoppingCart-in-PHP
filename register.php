<?php
include "regist.html";
session_start();
//include "functions.php";
require_once "connection.php";
function getPosts()
{
    $posts = array();
    
   // $posts[0] = $_POST['id'];
    $posts[1] = $_POST['username'];
    $posts[2] = $_POST['email'];
    $posts[3] = $_POST['password'];
    //$posts[4]= $_POST['role'];
   
    return $posts;
}
if (isset($_POST['btn_register'])) 
{
       $data = getPosts();
       if(empty($data[1]) || empty($data[2]) || empty($data[3]))
       {
           echo 'Introdu datele!';
       }  else {
           
           $insertStmt = $pdo->prepare('INSERT INTO masterlogin(username,email,password) VALUES(:username,:email,:password)');
           $insertStmt->execute(array(
                       ':username'=> $data[1],
                       ':email'=> $data[2],
                       ':password'  => $data[3],
           ));
           
           if($insertStmt)
           {
               echo '<script>alert("Bine ai venit!")</script>';
               $_SESSION['user_login']=$data[1];
               header("refresh:0;index.php");
           }else{
               echo '<script>alert("Contul nu a fost inregistrat!")</script>';
           }
       }
           
       

}
?>
