<!-- 
/** Exercice 1 : Concaténation simple

1 . Créer deux variables nom et prenom et affecter les valeurs de son choix
2 . Concatener ces deux variables pour afficher une chaîne de caractère du nom et prénom complets avec echo

/** Exercice 2 : Concatenation avec des phrases

1 . Créer une variable phrase1 qui contiendra la chaine de caractères : Le ciel est
2 . Créer une variable phrase2 qui contiendra la chaine de caractères : bleu aujourd'hui 
3 . Concatener les deux variables en utilisant variable . variable et afficher le resultat avec echo

/** Exercice 3 : Concatenation avec l'opérateur combiné ".="

1 . Créer une variable texte avec la valeur : je vais
2 . Utiliser l'opérateur combiné pour ajouter : à la plage
3 . Afficher le resultat

/** Exercice 4 : Quotes simples et doubles

1 . Créer une variable mot qui contiendra la chaine de caractères : PHP
2 . Utiliser echo pour afficher cette variable à l'interieur d'une chaine entourée de quotes doubles (exemple : echo "le mot est : $mot")
3 . Faire la même chose mais avec des quotes simple et observer la différence -->


    <?php
    $nom = "Henni";
    $prenom2 = "Nawel";
    echo $nom . " " . $prenom2. "<br>" ;
    ?>

    <?php
    $phrase1 = "Le ciel est" ;
    $phrase2 = "bleu aujourd'hui" ;
    echo $phrase1 . " " . $phrase2 . "<br>";
    ?>

    <?php
    $phrase3 = "je vais " ;
    $phrase3 .= "à la plage" ;
    echo $phrase3. "<br>";
    ?>

    <?php
    $mot = "PHP" ;
    echo "la variable est : $mot". "<br>";
    echo 'la variable est : $mot'. "<br>";
    echo 'la variable est : '.$mot. "<br>";
    ?>


