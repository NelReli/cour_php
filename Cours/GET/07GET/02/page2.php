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
    if(isset($_GET["nom"])){ // vérifie si la clé "nom" existe
        echo $_GET["nom"]."<br>";
    }else{ // si la clé n'existe pas alors tu affiche "article"
        echo $_GET["article"]."<br>";
    }


    if(array_key_exists("ville",$_GET)){ // autre méthode
        echo $_GET["ville"]."<br>";
    }else{
        echo $_GET["couleur"]."<br>";
        echo $_GET["prix"]."<br>";
    }
    ?>
</p>