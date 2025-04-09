<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    
<h2 >Formulaire d'inscription</h2>

<form action="exo_2.php" method="POST">

    <label for="prenom">Prénom</label>
    <input type="text" name="prenom"  required>

    <label for="nom">Nom</label>
    <input type="text" name="nom" required>
    
    <label for="age">Age</label>
    <input type="number" name="age" required>

    <button name="enregistre" type="submit">Enregistrer</button>

</form>
</body>
</html>
