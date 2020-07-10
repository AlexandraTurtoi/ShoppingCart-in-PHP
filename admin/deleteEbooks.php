<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check that the contact ID exists
if (isset($_GET['id'])) {
    // Select the record that is going to be deleted
    $stmt = $pdo->prepare('SELECT * FROM ebooks WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$product) {
        exit('Product doesn\'t exist with that ID!');
    }
    // Make sure the user confirms beore deletion
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            // User clicked the "Yes" button, delete record
            $stmt = $pdo->prepare('DELETE FROM ebooks WHERE id = ?');
            $stmt->execute([$_GET['id']]);
            $msg = 'You have deleted the product!';
            
        } else {
            // User clicked the "No" button, redirect them back to the read page
            header('Location: listaEbooks.php');
            exit;
        }
    }
} else {
    exit('No ID specified!');
}
?>
  
<?=template_header('Delete')?>

<div class="content delete" >
    <h2>Delete Product #<?=$product['id']?></h2>
    
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php else: ?>
	<p>Esti sigur ca vrei sa stergi produsul #<?=$product['id']?>?</p>
    <div class="yesno" >
        <a href="deleteEbooks.php?id=<?=$product['id']?>&confirm=yes" align="center">Yes</a>
        <a href="deleteEbooks.php?id=<?=$product['id']?>&confirm=no">No</a> 
    </div>
    
    <?php endif; ?>
</div>
<style>
    .delete .yesno {
      display: flex;
      align-content: center;
}
.delete .yesno a {
  	display: inline-block;
  	text-decoration: none;
  	background-color: #38b673;
  	font-weight: bold;
  	color: #FFFFFF;
  	padding: 10px 15px;
      margin: 15px 10px 15px 0;
      
}
.delete .yesno a:hover {
  	background-color: #32a367;
}
    </style>
    <a href="listaEbooks.php" class="btn">Inapoi la lista</a>
<?=template_footer()?>