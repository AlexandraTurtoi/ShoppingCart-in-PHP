<?php
include('connection.php');
// The amounts of products to show on each page


//fetch_data.php

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

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM carte WHERE 
	";
	
	if(isset($_POST["categorie"]))
	{
		$categorie_filter = implode("','", $_POST["categorie"]);
		$query .= "
		 categorie IN('".$categorie_filter."')
		";
	}
	

	$statement = $db->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			<div class="col-sm-4 col-lg-3 col-md-3" >
				<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
					<img src="imgs/'. $row['img'] .'" alt="" class="img-responsive" >
					<p align="center"><strong><a href="#">'. $row['titlu'] .'</a></strong></p>
					<h4 style="text-align:center;" class="text-danger" >'. $row['price'] .' lei</h4>
					<p>Categorie : '. $row['categorie'].' <br />
					
					Numar Pagini : '. $row['numarPagini'] .' <br />
					
				</div>

			</div>
			';
		}
	}
	else
	
	{
		$output = 'no data found';
	}
	echo $output;
}

?>