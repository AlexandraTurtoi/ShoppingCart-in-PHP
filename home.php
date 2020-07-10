<?php
include 'connection.php';

$stmt = $pdo->prepare('SELECT * FROM carte ORDER BY id DESC LIMIT 4');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<?=template_header('Home')?>

<div class="featured">
    <h2>Carti</h2>
    <p>Tot ce e mai bun pentru tine</p>
</div>
<div class="recentlyadded content-wrapper">
    <h2>Ultimele reduceri</h2>
    <div class="products">
        <?php foreach ($recently_added_products as $product): ?>
           
        <a href="index.php?page=carte&id=<?=$product['id']?>" class="product">
            <img src="imgs/<?=$product['img']?>" width="200" height="250" alt="<?=$product['titlu']?>">
            <span class="name"><?=$product['titlu']?></span>
            <span class="price">
                <?=$product['price']?> lei
                  <?php if ($product['reducere'] > 0): ?>
                <span class="rrp"><?=$product['reducere']?>lei</span>
                <?php endif; ?>
            </span>
        </a>
        
        <?php endforeach; ?>
    </div>
</div>

<?=template_footer()?>