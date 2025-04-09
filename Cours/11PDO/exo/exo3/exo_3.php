<?php
if(isset($_POST["pseudo"]) && !empty($_POST["motDePasse"]) && !empty($_POST["pseudo"]) ){ 
    
        echo "<p> Connexion réussie ".htmlspecialchars($_POST["nom"])."</p><br>";
    }else{
        echo "<p> veuillez remplir tous les champs.</p><br>";
    
    
}


?>