<?php
// Vérification des données reçues
$pseudo = isset($_GET['pseudo']) ? htmlspecialchars($_GET['pseudo']) : 'erreur'; //opérateur (condition) ternaire
$email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : 'erreur';

var_dump($_GET);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Résultat du formulaire</title>
</head>
<body>
    <h3>Données reçues :</h3>
    <p><strong>Votre pseudo :</strong> <?= $pseudo ?></p>
    <p><strong>Votre email :</strong> <?= $email ?></p>

    <a href="page1.php">⏪ Revenir au formulaire</a>
</body>
</html>