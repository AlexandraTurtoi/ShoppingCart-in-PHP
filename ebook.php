<?php

if (isset($_GET['id'])) {
    
    $stmt = $pdo->prepare('SELECT * FROM ebooks WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$product) {
        
        die ('Product does not exist!');
    }
} else {
    
    die ('Product does not exist!');
}
?>
<?=template_header('Ebooks')?>

<div class="product content-wrapper">
    <img src="imgs/<?=$product['img']?>" width="500" height="550" alt="<?=$product['titlu']?>">
    <div>
        <h1 class="name"><?=$product['titlu']?></h1>
        <h3 class="name"><?= $product['autor'] ?></h3>
        <span class="price">
            <?=$product['price']?>
            <?php if ($product['reducere'] > 0): ?>
            <span class="rrp"><?=$product['reducere']?></span>
            <?php endif; ?>
        </span>
        <form action="index.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value="<?=$product['codc']?>">
            <input type="submit" value="Add To Cart">
        </form>
        <div class="description">
            <?=$product['descriere']?>
        </div>
    </div>
</div>

<?=template_footer()?>