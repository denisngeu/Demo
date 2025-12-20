<?php
require_once __DIR__ . '/../config/config.php';

// Connexion à la base de données
try {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    if ($conn->connect_error) {
        die("Connexion échouée: " . $conn->connect_error);
    }
    
    $conn->set_charset("utf8");
} catch (Exception $e) {
    die("Erreur de connexion: " . $e->getMessage());
}
?>
