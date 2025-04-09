<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    
<h2 >Formulaire de connexion</h2>

<form action="exo_p2.php" method="POST">
    <label for="prenom">Prénom</label>
    <input type="text" name="prenom"  required>

    <label for="nom">Nom</label>
    <input type="text" name="nom" required>

    <button name="connecte" type="submit">connecter</button>
</form>
</body>
</html>
