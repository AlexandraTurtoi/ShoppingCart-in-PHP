<?php
include "login.html";
require_once 'connection.php';

session_start();

$msg = ""; 
if(isset($_POST['btn_login'])) {
    $username = $_REQUEST["txt_username"];
       $password = $_REQUEST["txt_password"];
    if($username != "" && $password != "") {
        try {
            $query = "select * from `masterlogin` where `username`=:username and `password`=:password";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam('username', $username, PDO::PARAM_STR);
            $stmt->bindValue('password', $password, PDO::PARAM_STR);
            $stmt->execute();
            $count = $stmt->rowCount();
            $row   = $stmt->fetch(PDO::FETCH_ASSOC);
            if($count == 1 && !empty($row)) {

                $_SESSION['sess_user_id']   = $row['id'];
                $_SESSION['sess_username'] = $row['username'];
                $_SESSION['sess_role'] = $row['role'];
            }

                if($row['role'] == "admin") {
                    $_SESSION["admin_login"] = $username;   
                    $loginMsg = "Admin... Successfully Login..."; 
                    echo '<script>alert($loginMsg)</script>';
                    header("refresh:0;admin/listaCarti.php"); 
                } else if($row['role'] == "user") {
                    $_SESSION["user_login"] = $username;    
                    $loginMsg = "User... Successfully Login..."; 
                    echo '<script>alert($loginMsg)</script>';
                    header("refresh:0;index.php"); 
                    
                } else {
                $msg = "Invalid login information.";
            }
        } catch (PDOException $e) {
            echo "Error : ".$e->getMessage();
        }
    } else {
        $msg = "Both fields are required.";
    }
}
?>
