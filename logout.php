<?php
session_start();
echo '<script>alert("Ai fost delogat cu succes!")</script>';
header("location:index.php");

session_destroy();

?>