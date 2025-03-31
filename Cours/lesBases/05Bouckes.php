<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    







<!-- ------------------------------- -->
<h2>Les Boucles</h2>
<!-- ------------------------------- -->

<?php


// 1 . *****  FOR  ******
//------------------------

$tab = ["123","124","125"];

for($i=0; $i<count($tab);$i++){
    echo $tab[$i]."<br>";
}

// avec la boucle for vous avez plus de controle sur l'index, par exemple vous pouvez commander la boucle à l'index de votre choix.


// Boucle for dans un tableau associatif

$tab2=[
    "id"=>123,
    "email"=>"gg_gmail.com",
    "age"=>25
];

// for($i=0; $i<count($tab2);$i++){   // erreur on ne peut pas utiliser le for pour tableau associatif
//     echo $tab2[$i];
// }

// cette boucle me cree une erreur car la boucle for ne peux pas boucler un tableau associatif n'ayant pas d'index.


// 2 . *****  WHILE  ******
//----------------------------

$i=0;  // valeur de départ de la boucle

while($i<5){ // tant que $i est inférieur à 5 nous entrons dans la boucle
    echo "$i---";
    $i++;  // incrémentation
}

echo "<br>";


// 3 . *****  DO WHILE  ******
//----------------------------


$j=1;

do{
    echo "$j je fais un tour de boucle <br>";
    $j++;
    
}while($j<10);



//---------------------------------------------

// Boucler un tableau associatifs

//---------------------------------------------


// 3 . *****  FOREACH  ******
//----------------------------

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


$tab5=[
    "Tab1"=>[1,2,3],
    "Tab2"=>[4,5,6],
    "Tab3"=>[7,8,9]
];

echo "<pre>";
var_export ($tab5);
"</pre>";

foreach($tab5 as $key=>$tabIndex){
    // on affiche l'index des tableaux (tabIndex est un tableau)
    echo "<hr>tableau index : $key<hr>";
    foreach($tabIndex as $value) // on fait un deuxieme foreach pour afficher valeur des tableaux
    echo "<p> valeur : $value</p>";
}





//réponse exo boucles.php

?>

<?php
$i=0;
while($i<=20){
    if ($i%2===0){
        echo $i;
    }
$i++;
}
?>

<?php

$depart=2000;
$year=date("Y");

while ($depart<$year){
    echo "<ul>$depart</ul>";
    $depart++;
};

?>

<?php

$j=0;

do{
    if ($j%3===0){
        echo $j."<br>";
    } 
    $j++;
}
while ($j<=30);

?>



<?php

for ($n=0; $n<10; $n++){
    $resultat=$n*5;
    echo $resultat."<br>";
}

?>



<table style="border: 1px solid black; padding:5px">
    
        <?php

        for ($n=1; $n<=5; $n++){
            echo "<tr>";
            for($x=1; $x<=5; $x++){
                echo "<td style='border : 1px solid black'>$n$x</td>";
                }
            "</tr>";
        }

        ?>

</table>



<?php

$person=[
    "prenom"=>"Nawel",
    "nom"=>"Henni",
    "age"=>47,
    "email"=>"hn@gmail.com"
];

foreach ($person as $cle=> $valeur){
    if($cle!=="email"){
        echo "<p> $cle : $valeur </p>";
    }else{
        // echo "<a>$cle : $valeur</a>";
        echo "<a href=$valeur> $valeur</a>";
        echo "<br>";
    }
};

?>



<?php

$person=[
    "accueil"=>"../pages/accueil.php",
    "produits"=>"../pages/produits.php",
    "contact"=>"../pages/contact.php",
];

foreach ($person as $key=> $valeurs){
    echo "<a href=$valeurs>$valeurs</a>";
    echo "<br>";
};

?>


<table style="border: 1px solid black; padding:5px">
    
        <?php

        for ($v=1; $v<=10; $v++){
            echo "<tr>";
            for($w=1; $w<=10; $w++){
                $random=rand(0,100);
                if($random%2===0){
                    echo "<td style='background : green ; border : 1px solid black'>$random</td>";
                }else{
                    
                    echo "<td style='background : pink ; border : 1px solid black'>$random</td>";
                }
            }
            "</tr>";
        }

        ?>

</table>




















</body>
</html>