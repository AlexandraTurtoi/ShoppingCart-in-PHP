<?php
function pdo_connect_mysql() {
    
    
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = "";
    $DATABASE_NAME = 'biblioteca';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	
    	die ('Failed to connect to database!');
    }
}

function template_header($title) {
    
echo <<<EOF
    <!DOCTYPE html>
    <html>
    <head>
        <title>$title</title>
        <link rel="stylesheet" type="text/css" href="operations.css">
        <link href="../style.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
            
        
    </head>
    <body>
        <header>
            <div class="content-wrapper">
                <h1>TrixShop - ADMIN PAGE</h1>
                <nav>
                    <a href="listaCarti.php">Edit carti</a>
                    <a href="listaAudio.php">Edit audiobooks</a>
                    <a href="listaEbooks.php">Edit ebooks</a>
                    <a href="admin_users.php">Edit users</a>
                </nav>
                <div class="link-icons">
                <!-- Load icon library -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    
    
        <a href="profile.php"><i class="fas fa-user-circle"></i>Admin</a>
        <a href="../logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
    
    
      
    </div>
    </div>
        </header>
        <main>
EOF;
}
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
