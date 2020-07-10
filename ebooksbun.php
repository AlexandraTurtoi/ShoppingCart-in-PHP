<?php

$num_products_on_each_page =8;

$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;

$stmt = $pdo->prepare('SELECT * FROM ebooks ORDER BY titlu ASC LIMIT ?,?');

$stmt->bindValue(1, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
$stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
$stmt->execute();

$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

$total_products = $pdo->query('SELECT * FROM ebooks')->rowCount();
?>
<?=template_header('Carti')?>

<div class="products content-wrapper">
    <h1>Ebooks</h1>
    <p><?=$total_products?> ebooks</p>
    <div class="products-wrapper">
        <?php foreach ($products as $product): ?>
        <a href="index.php?page=ebook&id=<?=$product['id']?>" class="product">
            <img src="imgs/<?=$product['img']?>" width="200" height="250" alt="<?=$product['titlu']?>">
            <span class="name"><?=$product['titlu']?></span>
            
            <span class="price">
                <?=$product['price']?>lei
                <?php if ($product['reducere'] > 0): ?>
                <span class="rrp"><?=$product['reducere']?>lei</span>
                <?php endif; ?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
    <div class="buttons">
        <?php if ($current_page > 1): ?>
        <a href="index.php?page=ebooks&p=<?=$current_page-1?>">Prev</a>
        <?php endif; ?>
        <?php if ($total_products > ($current_page * $num_products_on_each_page) - $num_products_on_each_page + count($products)): ?>
        <a href="index.php?page=ebooks&p=<?=$current_page+1?>">Next</a>
        <?php endif; ?>
    </div>
</div>

<?=template_footer()?>