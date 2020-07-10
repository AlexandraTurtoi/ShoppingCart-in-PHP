<?php
include 'functions.php';
// Connect to MySQL database
$pdo = pdo_connect_mysql();
// Get the page via GET request (URL param: page), if non exists default the page to 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
// Number of records to show on each page

$stmt = $pdo->prepare('SELECT * FROM audiobooks ORDER BY id ');


$stmt->execute();
// Fetch the records so we can display them in our template.
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
$num_contacts = $pdo->query('SELECT COUNT(*) FROM audiobooks')->fetchColumn();
?>
<?=template_header('Edit Audiobooks')?>

<div class="content read">
	<h2 align= 'center'>Lista audiobooks</h2>
	<a href="createAudio.php" class="btn">Add audiobooks</a>
	<table style="width:90%">
        <thead >
            <tr style="background-color: #696969; color: #fff;" >
                <td>#</td>
                <td>Titlu</td>
                <td>Autor</td>
                <td>Durata</td>
                <td>Limba</td>
                <td>Pret(pret final)</td>
                <td>Reducere(pret initial)</td>
                <td>Imagine</td>
                <td>Cantitate</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?=$product['id']?></td>
                <td><?=$product['titlu']?></td>
                <td><?=$product['autor']?></td>
                <td><?=$product['durata']?></td>
                <td><?=$product['categorie']?></td>
                <td><?=$product['price']?></td>
                <td><?=$product['reducere']?></td>
                <td><?=$product['img']?></td>
                <td><?=$product['quantity']?></td>
                
                <td class="actions">
                    <a href="updateAudio.php?id=<?=$product['id']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                    <a href="deleteAudio.php?id=<?=$product['id']?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
	<a href="generatepdfAudiobooks.php">Genereaza pdf</a>
</div>

<?=template_footer()?>