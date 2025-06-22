<?php
// Fichier : connexion.php
$host = 'localhost';
$dbname = 'my_class_room';
$user = 'root'; // change selon ton config
$pass = '';     // change selon ton config

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connexion réussie";
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
