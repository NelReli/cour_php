<?php
if(isset($_GET["chiffre_1"]) && isset($_GET["chiffre_2"])&& !empty($_GET["chiffre_1"]) && !empty($_GET["chiffre_2"]) ){
    
    $chiffre_1=htmlspecialchars($_GET["chiffre_1"]);
    $chiffre_2=htmlspecialchars($_GET["chiffre_2"]);

    $resultat = $chiffre_1+$chiffre_2;
        echo "<p> le total de l'addition de $chiffre_1 et $chiffre_2 est $resultat </p><br>";
    }else{
        echo "<p> entrez deux chiffres.</p><br>";
    
    
}


?>