<?php
include('connection.php');

// The amounts of products to show on each page


//fetch_data.php


// The current page, in the URL this will appear as index.php?page=products&p=1, index.php?page=products&p=2, etc...
$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int) $_GET['p'] : 1;
// Select products ordered by the date added
$stmt = $pdo->prepare('SELECT * FROM audiobooks ORDER BY id ');

$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
$total_products = $pdo->query('SELECT * FROM audiobooks')->rowCount();
?>

					
<?php
	if (isset($_POST["action"])&&isset($_POST["categorie"])) {
		$categorie_filter = implode("','", $_POST["categorie"]);
		$query = "SELECT * FROM audiobooks WHERE	 categorie IN('" . $categorie_filter . "')";
	

?>
	
		<?php
		$statement = $pdo->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		$total_row = $statement->rowCount();
		$output = '';

		if ($total_row > 0) { ?>
	
			<p><?= $total_row ?> audiobooks </p>
			
			<?php foreach ($result as $row) { ?>
				<div class="products content-wrapper">

				<div class="products-wrapper">

					<a href="index.php?page=audiobook&id=<?= $row['id'] ?>" class="product">
						<img src="imgs/<?= $row['img'] ?>" width="200" height="250" alt="<?= $row['titlu'] ?>">
						<span class="name"><?= $row['titlu'] ?></span>
						<span class="price">
							<?= $row['price'] ?>lei
							<?php if ($row['reducere'] > 0) : ?>
								<span class="rrp"><?= $row['reducere'] ?>lei</span>
							<?php endif; ?>
						</span>
					</a>

				</div>

	</div>
<?php	}}}else{
		    ?>
		<div class="products content-wrapper">

<p><?= $total_products ?> Audiobooks</p>
<div class="products-wrapper">
	<?php foreach ($products as $product) : ?>
		<a href="index.php?page=audiobook&id=<?= $product['id'] ?>" class="product">
			<img src="imgs/<?= $product['img'] ?>" width="200" height="250" alt="<?= $product['titlu'] ?>">
			<span class="name"><?= $product['titlu'] ?></span>
			<span class="price">
				<?= $product['price'] ?>lei
				<?php if ($product['reducere'] > 0) : ?>
					<span class="rrp"><?= $product['reducere'] ?>lei</span>
				<?php endif; ?>
			</span>
		</a>
	<?php endforeach; ?>
</div>


</div>
		<?php	} ?>	

