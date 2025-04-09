<?php
session_start();



if($_SERVER['REQUEST_METHOD']=='POST'){
    $_SESSION['nom']=$_POST['nom'];
    $_SESSION['prenom']=$_POST['prenom'];
}



if (isset($_SESSION['prenom']) && isset($_SESSION['nom'])) {
    echo "<p> “Bonjour ". htmlspecialchars($_SESSION['prenom']).", bienvenue sur le site.” </p>";
    echo "  <form action='deconnexion.php' method='post'>
                <button type='submit' name='deconnexion'>déconnexion</button>
            </form>";
} else {
    echo "<p>Bonjour, visiteur !</p>";
    echo "<button type='button' onclick='location.href=\"solution.php\"'>Connexion</button>";
};



?>