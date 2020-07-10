<?php
//verifica daca parametrul de id este specificat in url
if (isset($_GET['id'])) {
    $stmt = $pdo->prepare('SELECT * FROM audiobooks WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    //verifica daca produsul exista, adica daca array ul nu e gol
    if (!$product) {
        die ('Product does not exist!');
    }
} else {
    //daca nu e specificat id ul
    die ('Product does not exist!');
}
?>
<?=template_header('Audiobooks')?>

<div class="product content-wrapper">
    <img src="imgs/<?=$product['img']?>" width="500" height="550" alt="<?=$product['titlu']?>">
    <div>
        <h1 class="name"><?=$product['titlu']?></h1>
        <h3 class="name"><?= $product['autor'] ?></h3>
        <span class="price">
            <?=$product['price']?> lei
            <?php if ($product['reducere'] > 0): ?>
            <span class="rrp"><?=$product['reducere']?> lei</span>
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