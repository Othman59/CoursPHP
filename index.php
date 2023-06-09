<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des personnages</title>
</head>
<body>
    <h1>Liste des personnages</h1>

    <?php
    // Connexion à la base de données
    $conn = new PDO('mysql:host=localhost;dbname=', '', '');

    // Récupération des personnages de l'utilisateur connecté
    $username = $_SESSION['username'];
    $query = $conn->prepare("SELECT * FROM personnages WHERE proprietaire = :username");
    $query->bindParam(':username', $username);
    $query->execute();
    $characters = $query->fetchAll(PDO::FETCH_ASSOC);

    // Affichage des personnages
    if (count($characters) > 0) {
        echo '<ul>';
        foreach ($characters as $character) {
            echo '<li><a href="detail.php?id=' . $character['id'] . '">' . $character['nom'] . '</a></li>';
        }
        echo '</ul>';
    } else {
        echo 'Aucun personnage trouvé.';
    }

    // Fermeture de la connexion à la base de données
    $conn = null;
    ?>

    <br>
    <a href="logout.php">Déconnexion</a>
</body>
</html>
