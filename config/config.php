<?php
session_start();

$conn = new PDO(
 "mysql:host=localhost;dbname=ecommerce_demo",
 "root",
 "",
 [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);
?>
