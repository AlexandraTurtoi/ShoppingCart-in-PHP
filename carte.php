<?php
if (isset($_GET['id'])) {
    $stmt = $pdo->prepare('SELECT * FROM carte,autor where carte.coda=autor.coda and carte.id=?');
    $stmt->execute([$_GET['id']]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$product) {
        die ('Product does not exist!');
    }
} else {
    
    die ('Product does not exist!');
}
?>
<?=template_header('Carti')?>

<div class="product content-wrapper">
    <img src="imgs/<?=$product['img']?>" width="500" height="550" alt="<?=$product['titlu']?>">
    <div>
        <h1 class="name"><?=$product['titlu']?></h1>
        <h3 class="name"><?= $product['prenume'],' ', $product['nume'] ?></h3>
        <span class="price">
            <?=$product['price']?> lei
            <?php if ($product['reducere'] > 0): ?>
            <span class="rrp"><?=$product['reducere']?> lei</span>
            <?php endif; ?>
        </span>
        <form action="index.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="id" value="<?=$product['id']?>">
            <input type="submit" value="Add To Cart">
        </form>
        <div class="description">
            <?=$product['descriere']?>
        </div>
    </div>
</div>

<?=template_footer()?>