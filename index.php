<?php
session_start();
include 'functions.php';
include 'connection.php';

//$pdo = pdo_connect_mysql();
// pagina default:home.php
$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
// Include and show the requested page
include $page . '.php';
?>