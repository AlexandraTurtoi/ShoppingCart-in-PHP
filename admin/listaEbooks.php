<?php
include 'functions.php';
// Connect to MySQL database
$pdo = pdo_connect_mysql();
// Get the page via GET request (URL param: page), if non exists default the page to 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
// Number of records to show on each page

$stmt = $pdo->prepare('SELECT * FROM ebooks ORDER BY id ');


$stmt->execute();
// Fetch the records so we can display them in our template.
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
$num_contacts = $pdo->query('SELECT COUNT(*) FROM ebooks')->fetchColumn();
?>
<?=template_header('Edit Ebooks')?>

<div class="content read">
	<h2 align= 'center'>Lista ebooks</h2>
	<a href="createEbooks.php" class="btn">Add ebooks</a>
	<table style="width:90%">
        <thead >
            <tr style="background-color: #696969; color: #fff;" >
                <td>#</td>
                <td>Titlu</td>
                <td>Autor</td>
                <td>Dimensiune</td>
                <td>Limba</td>
                <td>Pret(pret final)</td>
                <td>Reducere(pret initial)</td>
                <td>Imagine</td>
               
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?=$product['id']?></td>
                <td><?=$product['titlu']?></td>
                <td><?=$product['autor']?></td>
                <td><?=$product['dimensiune']?></td>
                <td><?=$product['limba']?></td>
                <td><?=$product['price']?></td>
                <td><?=$product['reducere']?></td>
                <td><?=$product['img']?></td>
                
                
                <td class="actions">
                    <a href="updateEbooks.php?id=<?=$product['id']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                    <a href="deleteEbooks.php?id=<?=$product['id']?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
	<a href="generatepdfEbooks.php">Genereaza pdf</a>
</div>

<?=template_footer()?>