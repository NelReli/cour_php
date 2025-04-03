<!DOCTYPE html>
<html>

<head>
    <title>Formulaire GET</title>
</head>

<body>

    <h2>Formulaire (méthode GET)</h2>

    <form action="page2.php" method="get">
        <label for="pseudo">Votre pseudo :</label>
        <input type="text"  name="pseudo" required>
        <br><br>
        <label for="email">Votre email :</label>
        <input type="email"  name="email" required>
        <br><br>

        <input type="submit" value="Envoyer">
    </form>
    
</body>
</html>