<?php
 



function template_header($title) {
    if(!isset($_SESSION['user_login'])){
    $num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
   $name=session_name();
echo <<<EOT
<!DOCTYPE html>
<html>
    <head>
   
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        
	</head>
	<body>
        <header>
            <div class="content-wrapper">
                <h1>TrixShop</h1>
                <nav>
                    <a href="index.php">Home</a>
                    <a href="index.php?page=carti">Carti</a>
                    <a href="index.php?page=audiobooks">Audiobooks</a>
                    <a href="index.php?page=ebooks">Ebooks</a>
                </nav>
                <div class="link-icons">
                <!-- Load icon library -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<form class="example" action="" method="POST">
    <a href="login.php"><i class="fas fa-user-circle"></i>Login</a>


  </form>
                    <a href="index.php?page=cart">
                        <i class="fas fa-shopping-cart"></i>
                        <span>$num_items_in_cart</span>
                    </a>
                    
                </div>
                
            </div>
        </header>
        <main>
EOT;
}
else{
    $num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
    $name=$_SESSION['user_login'];
 echo <<<EOT
 <!DOCTYPE html>
 <html>
     <head>
    
         <meta charset="utf-8">
         <title>$title</title>
         <link href="style.css" rel="stylesheet" type="text/css">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
         
     </head>
     <body>
         <header>
             <div class="content-wrapper">
                 <h1>TrixShop</h1>
                 <nav>
                     <a href="index.php">Home</a>
                     <a href="index.php?page=carti">Carti</a>
                     <a href="index.php?page=audiobooks">Audiobooks</a>
                     <a href="index.php?page=ebooks">Ebooks</a>
                 </nav>
                 <div class="link-icons">
                 <!-- Load icon library -->
                 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
 
 <form class="example" action="" method="POST">
     <a href="profile.php"><i class="fas fa-user-circle">$name</i></a>
     <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Log out</a>
 
 
   </form>
                     <a href="index.php?page=cart">
                         <i class="fas fa-shopping-cart"></i>
                         <span>$num_items_in_cart</span>
                     </a>
                     
                 </div>
                 
             </div>
         </header>
         <main>
 EOT;
 }


}
//include "search.php";
// Template footer
function template_footer() {
$year = date('Y');
echo <<<EOT
        </main>
        <footer>
            <div class="content-wrapper">
                <p>&copy; $year, TrixShop</p>
            </div>
        </footer>
        
    </body>
</html>
EOT;
}


?>
