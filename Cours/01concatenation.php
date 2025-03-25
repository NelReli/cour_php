<h3> La Concaténation</h3>

<?php
    $hello = "Bonjour";
    $everyone = "tout le monde";

    echo $hello. " " .$everyone;
?>


<h3> La Concaténation lors des affectations</h3>

<?php
    // Affiche "Seckene" la 1ere valeur a été remplacé par la dernière
    $prenom = "Shezad";
    $prenom = "Seckene";
    echo $prenom. "<br>";
    
    // Affiche "Nawel Najiba" grâce à l'opérateur combiné ".=", la valeur "Najiba" vient se concaténer à la valeur "Nawel" sans la remplacer
    $prenom = "Nawel";
    $prenom .= " ";
    $prenom .= "Najiba";
    echo $prenom. "<br>";

    $bb = 12;
    $dd = 13;
    echo $bb . $dd   // fera une concatenation pas une addition
    
?>




<?php
$message = "aujourd'hui";  // ou bien :
$message = 'aujourd\'hui'; // on échappe les apostrophes dans les quotes simples avec \ (altGr + 8)

$txt = 'Bonjour';
echo "$txt tout le monde <br>"; // dans les guillemets, la variable est évaluée : c'est son contenu qui est affiché, ici "Bonjour"
echo '$txt tout le monde <br>'; // dans des quotes simples, la variable n'est pas évaluée, elle est traitée comme du texte brut. Affiche '$txt'.
?>

