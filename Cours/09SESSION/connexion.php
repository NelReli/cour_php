<?php
session_start();
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $_SESSION['prenom'] = $_POST['prenom'];
    $_SESSION['nom']=  $_POST['nom'];
    $_SESSION['email']=  $_POST['email'];
    $_SESSION['message']=  $_POST['message'];

    echo "Prénom : ".$_SESSION['prenom']."<br>";
    echo "Nom : ".$_SESSION['nom']."<br>";
    echo "Email : ".$_SESSION['email']."<br>";
    echo "Message : ".$_SESSION['message']."<br>";
    echo "<br>";

    header("location: accueil.php");//redirection vers la page d'accueil
    exit();//pour éviter d'afficher le reste du code , c'est comme un breack, si le code en bas est deja execute il ne le relance pas

}

?>

<!-- // Démarrage de la session au début du script -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="">
    <label for="prenom">Prénom :</label>
    <input type="text"  name="prenom" required><br>
        <br>
    <label for="prenom">Nom :</label>
    <input type="text"  name="nom" required><br>
        <br>            
    <label for="email">Email :</label>
    <input type="email"  name="email" required><br>
        <br>
    <label for="message">Message :</label>
    <textarea type="text"  name="message" rows="5" cols="33"></textarea><br>
        <br>
    <input type="submit" value="valider">
</form>

        <!-- <a href="./session1.php">test session</a> -->
    
</body>
</html>