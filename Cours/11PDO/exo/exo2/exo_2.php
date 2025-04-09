<?php
if(isset($_POST["nom"]) && isset($_POST["age"]) ){ 
    if($_POST["age"]>18){
        echo "<p> Nom : ".htmlspecialchars($_POST["nom"]). " - age : " .htmlspecialchars($_POST["age"])." , vous êtes majeur.</p><br>";
    }else{
        echo "<p> Nom : ".htmlspecialchars($_POST["nom"]). " - age : " .htmlspecialchars($_POST["age"])." , vous êtes mineur.</p><br>";
    }
    
}


?>