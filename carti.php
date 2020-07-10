<?php 

//index.php

include('connection.php');


// The current page, in the URL this will appear as index.php?page=products&p=1, index.php?page=products&p=2, etc...
$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
// Select products ordered by the date added
$stmt = $pdo->prepare('SELECT * FROM carte ORDER BY id ');
// bindValue will allow us to use integer in the SQL statement, we need to use for LIMIT

$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
$total_products = $pdo->query('SELECT * FROM carte')->rowCount();

?>

<!DOCTYPE html>
<html lang="en">
<?=template_header('Carti')?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href = "css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
    <link href="style.css" rel="stylesheet">
</head>

<body>
<div class="products content-wrapper">
    <h1>Carti</h1>
 
  
</div>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
        	
            <div class="col-md-3">                				
				
					<h3>Categorie</h3>
                    <div style="height: 180px;">
					<?php

                    $query = "SELECT DISTINCT(categorie) FROM carte  ORDER BY id DESC";
                    $statement = $pdo->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector categorie" value="<?php echo $row['categorie']; ?>"  > <?php echo $row['categorie']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                    
                    </div>
                    
                </div>
                
                <div class="col-md-9" >
                    
            	<br />
                <div class="row filter_data">

                </div>
            </div>
				
				
				
            </div>

            
        </div>
       
    </div>
    
		
<style>
#loading
{
	text-align:center; 
	background: url('loader.gif') no-repeat center; 
	height: 150px;
}
</style>

<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
       
        var categorie = get_filter('categorie');
        
        $.ajax({
            url:"carti_categorie.php",
            method:"POST",
            data:{action:action,  categorie:categorie},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    

});
</script>

</body>

</html>
