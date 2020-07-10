<?php

require_once "../connection.php";
include "functions.php";
template_header('Edit carti') ;
include "admin_users.html";
function getPosts()
{
    $posts = array();
    
   // $posts[0] = $_POST['id'];
    $posts[1] = $_POST['username'];
   // $posts[2] = $_POST['email'];
   // $posts[3] = $_POST['password'];
    $posts[4] = $_POST['role'];

    return $posts;
}
if(isset($_POST['update']))
{

    {
        $data = getPosts();
        if(empty($data[1]) )
        {
            echo 'Enter The User Data To Update';
        }  else {
            
            $updateStmt = $pdo->prepare('UPDATE masterlogin SET role = :role  WHERE username=:username');
            $updateStmt->execute(array(
                        ':username'=> $data[1],
                        ':role'=>$data[4],
                        
            ));
            
            if($updateStmt)
            {
                    echo '<script>alert("Data Updated")</script>';
            }
            
        }
}
}


if(isset($_POST['delete']))
{
    $data = getPosts();
    if(empty($data[1]))
    {
        echo '<script>alert("Enter The User ID To Delete")</script>';
        
    }  else {
        
        $deleteStmt = $pdo->prepare('DELETE FROM masterlogin WHERE username = :username');
        $deleteStmt->execute(array(
                    ':username'=> $data[1]
        ));
        
        if($deleteStmt)
        {
                 echo '<script>alert("User Deleted")</script>';
        }
        
    }

}

?>
<?=template_footer()?>
