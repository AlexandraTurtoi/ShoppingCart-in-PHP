<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $titlu = isset($_POST['titlu']) ? $_POST['titlu'] : '';
    $autor = isset($_POST['autor']) ? $_POST['autor'] : '';
    $dimensiune = isset($_POST['dimensiune']) ? $_POST['dimensiune'] : '';
    $descriere = isset($_POST['descriere']) ? $_POST['descriere'] : '';
    $limba = isset($_POST['limba']) ? $_POST['limba'] : '';
    $price = isset($_POST['price']) ? $_POST['price'] : '';
    $reducere = isset($_POST['reducere']) ? $_POST['reducere'] : '';
    $categorie = isset($_POST['categorie']) ? $_POST['categorie'] : '';
    $img = isset($_POST['img']) ? $_POST['img'] : '';
    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO ebooks VALUES (?, ?, ?, ?, ?, ?,?,?,?,?)');
    $stmt->execute([$id, $titlu, $autor,  $dimensiune,$descriere, $limba,$price,$reducere,$img,$categorie]);
    // Output message
    $msg = 'Created Successfully!';
}
?>
<?=template_header('Add Ebook')?>

<div class="content update">
    <h2 align="center">Add Ebook</h2>
    <a href="listaEbooks.php" class="btn">Inapoi la lista</a>
    <form action="createEbooks.php" method="post">
        <label for="id">ID</label>
        
        <input type="text" name="id" placeholder="26" value="auto" id="id">
        <label for="titlu">Titlu</label>
        <input type="text" name="titlu" placeholder="Titlu" id="name">
        <label for="autor">Autor</label>
      
        <input type="text" name="autor" placeholder="Autor" id="autor">
        <label for="durata">Dimensiune</label>
        <input type="text" name="dimensiune" placeholder="Dimensiune" id="dim">
        <label for="autor">Descriere</label>
      
        <input type="text" name="descriere" placeholder="Descriere" id="desc">
        <label for="durata">Limba</label>
        <input type="text" name="limba" placeholder="Limba" id="lb">
        <label for="price">Pret</label>
        
        <input type="text" name="pret" placeholder="Pret" id="pret">
        <label for="reducere">Reducere</label>
        <input type="text" name="reducere" placeholder="Reducere" id="red">
        <label for="img">Imagine</label>
       
        <input type="text" name="img" placeholder="ex: floare.jpg" id="img">
        <label for="cantitate">Categorie</label>
        <input type="text" name="categorie" placeholder="Categorie" id="categ">
       
        <input type="submit"  value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
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