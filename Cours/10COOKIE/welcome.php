<?php
session_start();
?>

<h1>Welcome</h1>

<?php
var_dump($_SESSION);
echo "<br>";
var_dump($_COOKIE);
echo "<br>";
?>

<a href="profil.php">Profil</a>

<form action="logout.php" method="post">
    <input type="submit" value="Déconnexion" name="logout">
</form>