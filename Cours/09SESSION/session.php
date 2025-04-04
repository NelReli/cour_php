<?php
session_start();

// var_dump($_SERVER);

$user=[
    "prenom"=>"emmanuel",
    "nom" =>"cacuci",
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

     //  if($_POST["prenom"]=== $user["prenom"] && $_POST["nom"]===$user["nom"]){
     //     $_SESSION['prenom'] = $_POST['prenom'];
     //     $_SESSION['nom']=  $_POST['nom'];

    $_SESSION['prenom'] = $_POST['prenom'];
    $_SESSION['nom']=  $_POST['nom'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['text'] = $_POST['text'];



header("location: acceuil.php");//redirection vers la page d'accueil
    exit();//pour éviter d'afficher le reste du code
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
            <label for="prenom">Prénom:</label>
            <input type="text"  name="prenom" required><br>
            <label for="nom">Nom  :</label>
            <input type="text"  name="nom" required><br>
            <label for="email">email</label>
            <input type="email"  name="email" required><br>
            <label for="text">text</label>
            <textarea name="text" rows="5" cols="33"></textarea>
            <input type="submit" value="valider">
        </form>

        <!-- <a href="./session1.php">test session</a> -->

</body>
</html>