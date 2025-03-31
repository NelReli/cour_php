<!-- Exercice 1 : Boucle while basique


Objectif : Créer une boucle while qui affiche les nombres pairs de 0 à 20 -->

<?php
$i=0;
while($i<=20){
    if ($i%2===0){
        echo $i."<br>";
    }
$i++;
}
?>


<!-- Exercice 2 : Générer une liste d'années avec une boucle while

Ojectif : Afficher les années de 2000 à l'année actuelle (qui doit être incluse) dans une liste non ordonnée (<ul>) -->

<?php

$depart=2000;
$year=date("Y");

while ($depart<=$year){
    echo "<ul style='list-style:none'><li>$depart</li></ul>";
    $depart++;
};

?>


<!-- Exercice 3 : Boucle do...while

Objectif : Utiliser une boucle do...while pour afficher les multiples de 3 inférieurs à 30. S'assurer que le premier multiple est affiché même si la condition n'est pas remplie -->

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


<!-- Exercice 4 : Boucle for

Objectif : Créer une boucle for qui affiche une table de multiplication (de 1 à 10) pour un nombre donné -->

<?php

for ($m=0; $m<10; $m++){
    $resultat=$m*5;
    echo $resultat."<br>";
}

?>


<!-- Exercice 5 : Boucles imbriquées pour créer une grille

Objectif : Créer une boucle for qui affiche une grille de 5x5 dans un tableau html (<table>).
Chaque cellule doit contenir les coordonnées de la cellule (par exemple (1,1) pour la première cellule) -->

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


<!-- Exercice 6 : foreach pour un tableau associatif

Objectif : Créer un tableau associatif avec les informations suivantes : 'prenom','nom','email','age'
Afficher chaque information sous la forme clé : valeur dans des paragraphes, l'email doit être dans un lien (<a>) -->

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


<!-- Exercice 7 : Foreach avec des clés personnalisées

Objectif : Créer un tableau associatif représentant un menu de navigation, les clés seront les titres des pages ('accueil','produits','contact') et les valeurs les liens correspondants.
afficher chaque element du menu sous forme de liens (<a>) -->

<?php

$person=[
    "accueil"=>"../pages/accueil.php",
    "produits"=>"../pages/produits.php",
    "contact"=>"../pages/contact.php",
];

foreach ($person as $key=> $valeurs){
    echo "<a href=$valeurs>$key</a>";
};
echo "<br>";

?>


<!-- Exercice 8 : Boucles imbriquées et conditions

Objectif : Créer un tableau HTML de 10x10 dans lequel chaque cellule contient un nombre aléatoire entre 1 et 100. 
Mettre un background vert sur les cellules contenant un nombre pair -->

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
        echo "<br>";

        ?>

</table>


<!-- Exercice 9 : Generation d'un calendrier

Objectif : Utiliser une boucle for pour générer un calendrier mensuel (de 1 à 31), puis y afficher les jours dans un tableau HTML, les week ends devront être en rouge -->



<table style="border: 1px solid black; padding:5px">
    
        <?php

$jour=1;
for ($p=1; $p<=5; $p++){
    echo "<tr>";
    for($g=1; $g<=7; $g++){
        echo "<td style='border : 1px solid black' >$jour</td>";
        $jour++;
    }
    "</tr>";
}
echo "<br>";

        ?>

</table>



<?php // version Shezad

echo "<table style='border: 1px solid black; border-collapse: collapse; text-align: center;'>";
echo "
";

$jour = 1;

for ($i = 0; $i < 5; $i++) { 
    echo "<tr>";
    for ($j = 0; $j < 7; $j++) { 
        if ($jour <= 31) {
            if ($j === 5 || $j === 6) { 
                echo "<td style='color: red; border: 1px solid black; padding: 5px;'>$jour</td>";
            } else {
                echo "<td style='border: 1px solid black; padding: 5px;'>$jour</td>";
            }
            $jour++;
        } else {
            echo "<td style='border: 1px solid black; padding: 5px;'></td>"; 
        }
    }
    echo "</tr>";
}

echo "</table>";
?>

<!-- Exercice 10 : Tableau de tableaux

Objectif : Créer un tableau contenant trois sous tableaux, chacun représentera une personne avec les clés 'prenom','nom','age'. 
Afficher toutes les informations sous forme de liste HTML ordonnées ('<ol>'), où chaque personne a sa propre sous-liste (<ul>)
Résultat attendu :  

<ol> 
<li> Personne 1 </li>
<ul> 
<li> prénom : prenom </li>
<li> nom : nom </li>
<li> age: age </li>
</ul>
<li> Personne 2 </li> -->