<?php
require_once("../connection.php");
require('../fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
   
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'TrixShop',0,0,'C');
    
    $this->SetFont('Arial','B',12);
    $this->Cell(-30,20,'Carti',0,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
$pdf = new PDF();

$pdf->AddPage();
// code for print Heading of tables
$pdf->SetFont('Arial','B',10);
$ret ="SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='biblioteca' AND `TABLE_NAME`='carte' AND `COLUMN_NAME` <> 'descriere' AND `COLUMN_NAME` <> 'img' AND `COLUMN_NAME` <> 'titlu'  AND `COLUMN_NAME` <> 'numarPagini'";
$query1 = $pdo -> prepare($ret);
$query1->execute();
$header=$query1->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query1->rowCount() > 0)
{
foreach($header as $heading) {
foreach($heading as $column_heading)
$pdf->Cell(32,12,$column_heading,1);
}}
//code for print da
$sql = "SELECT id,coda,categorie,price,reducere,quantity from  carte ";
$query = $pdo -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row) {
$pdf->SetFont('Arial','',10);
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(32,12,$column,1);
} }
$pdf->Output();
?>