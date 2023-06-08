<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

// Vérification de l'ID du personnage dans l'URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header('Location: index.php');
    exit();
}

// Connexion à la base de données
$conn = new PDO('mysql:host=localhost;dbname=votre_base_de_donnees', 'nom_utilisateur', 'mot_de_passe');

// Récupération du personnage
$id = $_GET['id'];
$query = $conn->prepare("SELECT * FROM personnages WHERE id = :id AND proprietaire = :username");
$query->bindParam(':id', $id);
$query->bindParam(':username', $_SESSION['username']);
$query->execute();
$character = $query->fetch(PDO::FETCH_ASSOC);

// Vérification si le personnage existe et appartient à l'utilisateur
if (!$character) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Détail du personnage</title>
</head>
<body>
    <h1>Détail du personnage</h1>

    <h2><?php echo $character['nom']; ?></h2>
    <p>Classe : <?php echo $character['
