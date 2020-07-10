<?php 

//index.php

include('connection.php');
include "functions.php";
$num_products_on_each_page =8;
// The current page, in the URL this will appear as index.php?page=products&p=1, index.php?page=products&p=2, etc...
$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
// Select products ordered by the date added
$stmt = $db->prepare('SELECT * FROM carte ORDER BY codc ASC LIMIT ?,?');
// bindValue will allow us to use integer in the SQL statement, we need to use for LIMIT
$stmt->bindValue(1, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
$stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
$total_products = $db->query('SELECT * FROM carte')->rowCount();

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

    <title>Product filter in php</title>

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
    <p><?=$total_products?> Carti</p>
  
</div>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
        	
            <div class="col-md-3">                				
				
					<h3>Categorie</h3>
                    <div style="height: 180px;">
					<?php

                    $query = "SELECT DISTINCT(categorie) FROM carte  ORDER BY codc DESC";
                    $statement = $db->prepare($query);
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
            url:"fetch_data.php",
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
