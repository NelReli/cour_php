<?php
if(isset($_GET["nom"]) && isset($_GET["prenom"]) ){ 
    echo "<p> Bienvenue : ".htmlspecialchars($_GET["prenom"]). " " .htmlspecialchars($_GET["nom"])."</p><br>";
}

?>