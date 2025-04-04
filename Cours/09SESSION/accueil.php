

<?php
session_start();
var_dump($_SESSION);
echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Acceuil</h1>

<?php

if (isset($_SESSION['prenom']) && isset($_SESSION['nom'])) {
        echo "<p>Bonjour " . htmlspecialchars($_SESSION['prenom']) . " " . htmlspecialchars($_SESSION['nom']) . "</p>";
        echo "  <form action='deconnexion.php' method='post'>
                    <button type='submit' name='logout'>déconnexion</button>
                </form>";
    } else {
        echo "<p>Bonjour, visiteur !</p>";
        echo "<button type='button' onclick='location.href=\"connexion.php\"'>Connexion</button>"; // au clique envoie vers page
    };

?>


</body>
</html>