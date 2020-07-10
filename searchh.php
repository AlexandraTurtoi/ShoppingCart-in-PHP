<!DOCTYPE html>
<html>
<head>
    <title>Edit products</title>
    <link rel="stylesheet" type="text/css" href="admin/operations.css">
    <link href="../style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        
	
</head>
<body>
    <header>
        <div class="content-wrapper">
            <h1>TrixShop - ADMIN PAGE</h1>
            <nav>
                <a href="crud_carti.php">Edit carti</a>
                <a href="crud_audiobooks.php">Edit audiobooks</a>
                <a href="crud_ebooks.php">Edit ebooks</a>
            </nav>
            <div class="link-icons">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




    <a href="profile.php"><i class="fas fa-user-circle"></i>Admin</a>
    <a href="../logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>


  
</div>
</div>
    </header>
	<form method="post" action="" >
        
       <div class="form-inline">
           <input type="text" name="keyboard" class="form-control">
           <button class="btn-success"name = "search">Search</button>
       </div>
    </form>
    <?php include "search.php" ?>
    <footer>
        <div class="content-wrapper">
            <p>&copy; 2020, TrixShop</p>
        </div>
    </footer>
</body>
</html>