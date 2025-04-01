<!-- ------------------------------- -->
<h2>Les Tableaux</h2>
<!-- ------------------------------- -->

<?php

// il existe 3 types de tableau en PHP

// 1. Tableau indexé
// 2. Tableau associatif
// 3. Tableau multidimensionnel


// ****Les Tableaux indexés****
//------------------------------

// Déclaration d'un tableau : il y a deux méthodes

// 1ère Méthode :
// array() est une fonction de PHP
$tab=array("element0",2,false,123.5);


// 2ème Méthode :
//[] c'est une syntaxe plus courte
$tab2=["element0","element1","element2"];


// 3ème Méthode :
//[] c'est une syntaxe plus courte
$tab3=["element0","element1","element2"];



echo $tab[1]."<br>"; // pour voir un index précis
// echo $tab;  // erreur de type "Array to string conversion" car on ne peut pas afficher directement un array avec un echo

// Fonction de debugage pour afficher le contenu du tableau
// var_dump()
// Affiche l'index , la longueur du tableau et le type de chaque élément, longueur de chain de caractère
echo "<pre>";
var_dump($tab); 
echo "</pre>";

$arr=2;
var_dump($arr);

// Print_r() est souvent accompagné de la balise <pre></pre> pour plus de lisibilité
// Affiche moins d'infos que var_dump() (pour un débugage rapide)

echo "<pre>";
print_r($tab); // on l'encadre avec pre pour plus de visibilité
echo "</pre>";


// Ajout élément dans un tableau indexé :
//-----------------------------------------

// 1 . les [] vides permettent d'ajouter une valeur à la fin de notre array

$tab2[]="push";  
echo "<pre>";
print_r($tab2); 
echo "</pre>";
echo "<br>";

$tab2[2]="Push2"; // si on donne index, il le remplacera
echo "<pre>";
print_r($tab2); 
echo "</pre>";
echo "<br>";


// 2 . Ajouter avec la fonction array_push

// array_push($tableauAmodifier, "elementAjouter");

array_push($tab2, "push3","push4","push5",);
echo "<pre>";
print_r($tab2); 
echo "</pre>";
echo "<br>";


// ****Les Tableaux associatifs****
//----------------------------------

// Un tableau associatif est un tableau dans lequel on choisit la dénomination des index
// On utilise l'opérateur clé valeur => permet d'assigner une valeur à une clé

$user1=[

    "id"=>123,
    "name_username"=>"Nassuf",
    "email"=>"nassuf@gmail.com"
];

// ici "id" est la clé , 123 est la valeur et le : "=>" est un lien entre les deux

print_r($user1);
echo "<br>";
echo $user1["email"];
echo "<br>";

$user2=array(

    "id"=>123,
    "name_username"=>"Nassuf",
    "email"=>"nassuf@gmail.com"
);

print_r($user2);
print_r($user2["id"]);
echo "<br>";
echo $user2["id"];
echo "<br>";
var_dump($user2);
echo "<br>";
var_export($user2);

//PHP ne fait pas la différence entre un tableau indexé et un tableau associatif
// Quand on affiche le print_r() ou var_dump() l'affichage est le même


// Ajout élément dans un tableau associatif :
//--------------------------------------------

$user2["password"]="123456"; // méthode à utiliser //

array_push($user2,["ville"=>"Toulouse"]); // ne pas utiliser avec les tableaux associatifs ni les multidimensionnels parce que ça crée tjs des index
echo "<pre>";
var_dump($user2);
echo "</pre>";
echo "<br>";

// Connaître la longueur d'un tableau :
//--------------------------------------------

// sur un tableau indexé

$tab5=["element0","element1","element2"];
echo "longueur du tableau : ".count($tab5);
echo "longueur du tableau : ".sizeof($tab5); // autre méthode
echo "<br>";

// sur un tableau Multidimensionnel

$personne=[
    "nom"=>"Arnaud",
    "mail"=>"arnaud@gmail.com",
    "age"=>[
        "hypothétique"=>15,
        "réel"=>55,
        "année de naissance"=>1965,
    ],
    "ville"=>"Casablanca",
];
echo print_r($personne);
echo count($personne);
echo "<br>";
echo count($personne["age"]);
echo "<br>";


// ****Les Tableaux Multidimensionnels****
//------------------------------------------

$tab_multi=[
    "Najiba",
    ["email","password"],
    "Seckene"
];

echo "<br>";
echo "je suis l'echo de l'email : ".$tab_multi[1][0];
echo "<br>";

$users=[
    [
        "id"=>123,
        "name_username"=>"Nassuf",
        "email"=>"Nassuf@gmail.com",
        "donnée_perso"=>[
            "name"=>"Nassuf",
            "age"=>35,
            "ville"=>"Casablanca",
        ]
    ],
    [
        "id"=>124,
        "name_username"=>"Najiba",
        "email"=>"najiba@gmail.com",
        "donnée_perso"=>[
            "name"=>"Najiba",
            "age"=>40,
            "ville"=>"Maroc",
        ]
    ],
    [
        "id"=>125,
        "name_username"=>"Nawel",
        "email"=>"nawel@gmail.com",
        "donnée_perso"=>[
            "name"=>"Nawel",
            "age"=>47,
            "ville"=>"Algérie",
        ],
    ]
    
];

echo $users[2]["donnée_perso"]["age"];
echo "<br>";




?>