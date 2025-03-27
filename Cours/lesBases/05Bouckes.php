<!-- ------------------------------- -->
<h2>Les Boucles</h2>
<!-- ------------------------------- -->

<?php

// Bouclerun tableau associatifs


// 1 . *****  FOREACH******
//---------------------------

// la boucle foreach() fonctionne UNIQUEMENT sur les tableaux ou objets, erreur si on boucle une variable non array(tableau)

// le mot clé " as " est OBLIGATOIRE 

// il y a deux façons d'écrire la boucle foreach


$users=[

    "id"=>123,
    "email"=>"g@gmail.com",
    "age"=>25,

];

foreach($users as $valeur){
    echo "je suis la valeur :".$valeur. "<br>";
}

foreach($users as $clé=>$valeur){
    echo "je suis la clé :". $clé. " et moi sa valeur :".$valeur. "<br>";
}

// foreach avec un tableau indexé

$ville =  ["toulon", "paris", "barcelone"];

foreach( $ville as $index ) {
    echo "Ma villes est : $index <br>";
}

foreach( $ville as $index=>$valeur ) {
    echo "Ma villes est : $valeur et son index est : '$index' <br>";
}

?>