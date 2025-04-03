<?php
echo "<pre>"; 
var_dump($_GET);
echo"</pre>";

echo "<pre>"; 
print_r($_GET);
echo"</pre>";


$url="page1.php";

echo "<p><a href = \"$url\"> Home </a></p>";

?>

<p>
    <?php

    // htmlspecialchars(); fonction pour securiser le site, La fonction htmlspecialchars() convertit certains caractères prédéfinis en entités HTML.

    if(isset($_GET["nom"])){ // vérifie si la clé "nom" existe
        echo "<p>".htmlspecialchars($_GET["nom"])."</p><br>";
    }else{ // si la clé n'existe pas alors tu affiche "article"
        echo "<p>". htmlspecialchars($_GET['article'])."</p><br>";
    }


    if(array_key_exists("ville",$_GET)){ // autre méthode
        echo $_GET["ville"]."<br>";
    }else{
        echo $_GET["couleur"]."<br>";
        echo $_GET["prix"]."<br>";
    }
    ?>
</p>