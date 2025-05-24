<?php
// Paramètres de connexion
$host = "localhost";
$user = "root";      // Par défaut sous WAMP/XAMPP
$password = "";      // Vide par défaut sous WAMP/XAMPP
$dbname = "location_voiture";    // Nom de ta base de données

// Connexion
$conn = new mysqli($host, $user, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}
?>