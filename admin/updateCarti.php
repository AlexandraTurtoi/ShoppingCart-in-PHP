<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if the contact id exists, for example update.php?id=1 will get the contact with the id of 1
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $coda = isset($_POST['coda']) ? $_POST['coda'] : '';
    $titlu = isset($_POST['titlu']) ? $_POST['titlu'] : '';
    $categorie = isset($_POST['categorie']) ? $_POST['categorie'] : '';
    $numarPagini = isset($_POST['numarPagini']) ? $_POST['numarPagini'] : '';
    $descriere = isset($_POST['descriere']) ? $_POST['descriere'] : '';
   
    $price = isset($_POST['price']) ? $_POST['price'] : '';
    $reducere = isset($_POST['reducere']) ? $_POST['reducere'] : '';
    $cantitate = isset($_POST['cantitate']) ? $_POST['cantitate'] : '';
    $img = isset($_POST['img']) ? $_POST['img'] : '';
        // Update the record
        $stmt = $pdo->prepare('UPDATE carte SET id = ?, coda = ?, titlu = ?,categorie = ?,numarPagini = ?, descriere = ?, price = ?,reducere = ?, img = ?, quantity = ?  WHERE id = ?');
        $stmt->execute([$id, $coda, $titlu, $categorie, $numarPagini, $descriere,$price,$reducere,$img,$cantitate, $_GET['id']]);
        $msg = 'Updated Successfully!';
        
    }
    // Get the contact from the contacts table
    $stmt = $pdo->prepare('SELECT * FROM carte WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$product) {
        exit('Product doesn\'t exist with that ID!');
    }
} else {
    exit('No ID specified!');
}
?>
<?=template_header('Update Carte')?>

<div class="content update">
    <h2 align="center">Actualizare produs #<?=$product['id']?></h2>
    <a href="listaCarti.php" class="btn">Inapoi la lista</a>
    <form action="updateCarti.php?id=<?=$product['id']?>" method="post">
    <label for="id">ID</label>
        
        <input type="text" name="id" value="<?=$product['id']?>" id="id">
        <label for="coda">Cod Autor</label>
        <input type="text" name="coda"value="<?=$product['coda']?>" id="coda">
        <label for="titlu">Titlu</label>
        <input type="text" name="titlu" value="<?=$product['titlu']?>" id="titlu">
        <label for="autor">Categorie</label>
        <input type="text" name="categorie" value="<?=$product['categorie']?>" id="categ">
        <label for="numarPagini">Numar Pagini</label>
        <input type="text" name="numarPagini" value="<?=$product['numarPagini']?>" id="nrpg">
        <label for="autor">Descriere</label>
        <input type="text" name="descriere" value="<?=$product['descriere']?>" >
        <label for="price">Pret</label>
        <input type="text" name="pret" value="<?=$product['price']?>" id="pret">
        <label for="reducere">Reducere</label>
        <input type="text" name="reducere" value="<?=$product['reducere']?>" id="reducere">
        <label for="img">Imagine</label>
        <input type="text" name="img" value="<?=$product['img']?>" id="imagine">
        <label for="cantitate">Cantitate</label>
        <input type="text" name="cantitate" value="<?=$product['quantity']?>" id="cantiate">
        <input type="submit" value="Update">
    </form>
    <?php if ($msg): ?>
    <p><?=
        $msg?></p>
    <?php endif; ?>
</div>
<style>
   
.update form {
    padding: 15px 0;
    display: flex;
    flex-flow: wrap;
}
.update form label {
    display: inline-flex;
    width: 400px;
    padding: 10px 0;
    margin-right: 25px;
    margin-left: 80px;
}
.update form input {
    padding: 10px;
    width: 400px;
    margin-left: 80px;
    margin-bottom: 15px;
   
}
.update form input[type="submit"] {
    display: block;
    background-color: #38b673;
    border: 0;
    font-weight: bold;
    font-size: 14px;
    color: #FFFFFF;
    cursor: pointer;
    width: 400px;
  margin-top: 15px;
}


    </style>
<?=template_footer()?>