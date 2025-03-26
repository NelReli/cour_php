<!-- Exercice 3 :
Créer et afficher un tableau associatif
Objectif : Travaillez avec un tableau associatif.
Instructions :
Créez un tableau associatif qui contient les informations suivantes : prénom, nom, et âge.
Affichez chaque information avec une phrase descriptive. -->

<?php

$tab=[
    "prénom"=>"Nawel",
    "nom"=>"Henni",
    "age"=>47,
];

echo $tab["prénom"];
echo"<br>";
echo $tab["nom"];
echo"<br>";
echo $tab["age"];
echo"<br>";

?>


<!-- Exercice 4 : 
Compter les éléments d'un tableau
Objectif : Utilisez les fonctions count() et sizeof().
Instructions :
Créez un tableau avec plusieurs villes.
Affichez le nombre d'éléments dans le tableau. -->

<?php

$ville=["Paris","Marseille","Nice","Valence"];

echo count($ville);
echo"<br>";
echo sizeof($ville);
echo"<br>";

?>


<!-- Exercice 5 :
Créer un tableau multidimensionnel
Objectif : Créez un tableau multidimensionnel et accédez à ses éléments.
Instructions :
Créez un tableau multidimensionnel avec des informations sur plusieurs étudiants : prénom, nom, et note.
Affichez la note du premier étudiant. -->

<?php

$student=[
    [
        "prénom"=>"Nawel",
        "nom"=>"Henni",
        "note"=>18,
    ],
    [
        "prénom"=>"Nael",
        "nom"=>"Heni",
        "note"=>8,
    ],
    [
        "prénom"=>"Wel",
        "nom"=>"Henii",
        "note"=>12,
    ],
    [
        "prénom"=>"Nel",
        "nom"=>"Heni",
        "note"=>20,
    ],
];

echo $student[0]["note"];
echo"<br>";


?>


<!-- Exercice 6 :
ajouter un 4eme users et affiché le résultat dans faite un echo d'une phrase ajoutant le nom de nina et son mail s $users = [
    [
        "prenom" => "Julien",
        "email" => "julien@example.com"
    ],
    [
        "prenom" => "Nina",
        "email" => "nina@example.com"
    ],
    [
        "prenom" => "Samir",
        "email" => "samir@example.com"
    ]
]; -->


<?php

$users = [
    [
        "prenom" => "Julien",
        "email" => "julien@example.com"
    ],
    [
        "prenom" => "Nina",
        "email" => "nina@example.com"
    ],
    [
        "prenom" => "Samir",
        "email" => "samir@example.com"
    ]
];

$users[]=[
    "prenom" => "Sair",
    "email" => "sair@example.com"
];

echo "<pre>";
print_r($users); 
echo "</pre>";
echo"<br>";

?>

<!-- Vérifier si la variable $tab4 est définie (isset) et non vide (!empty).
Si c'est le cas, ajouter un nouvel élément (une personne) dans $tab4.
Sinon, initialiser $tab4 avec le tableau $tab_multi qui contient une liste d’utilisateurs.

$tab_multi = array(

        0 => array(
            'prenom' => 'Julien',
            'nom'    => 'Dupon',
            'telephone' => '0601020304'
        ),

        1 => array(
            'prenom' => 'Nicolas',
            'nom'    => 'Duran',
            'telephone' => '0601020304'
        ),

        2 => array(
            'prenom' => 'Pierre',
            'nom'    => 'Dulac'
        )
) -->


<?php

$tab_multi = [
    [
        'prenom' => 'Julien',
        'nom'    => 'Dupon',
        'telephone' => '0601020304'
    ],
    [
        'prenom' => 'Nicolas',
        'nom'    => 'Duran',
        'telephone' => '0601020304'
    ],
    [
        'prenom' => 'Pierre',
        'nom'    => 'Dulac'
    ],
];


if ( isset($tab4) && !empty($tab4) ){
    $tab4[]=[
        'prenom'=> 'Nawel',
        'nom'=> 'Denis',
        'telephone'=>'0601020304'
    ];
}else{
    $tab4=$tab_multi;
    if (!isset ($tab4[2]["telephone"])) //en plus de l enonce de l exo pour ajouter tel au dernier element
    $tab4[2]["telephone"]="061122334400";
}

echo "<pre>";
var_dump($tab4);
echo "</pre>";

?>


<!-- Exercice 2 : 
Ajouter un utilisateur dans un tableau multidimensionnel
Objectif : Pratiquer l'ajout d'éléments complexes (tableaux associatifs).
Instructions :
1. Créez un tableau contenant deux utilisateurs (prénom, email).
2. Ajoutez un troisième utilisateur.
3. Affichez le tableau avec une boucle. -->

<?php

$user = [
    [
        "prenom" => "Julien",
        "email" => "julien@example.com"
    ],
    [
        "prenom" => "Nina",
        "email" => "nina@example.com"
    ],
];

$user[]=[
        "prenom" => "Samir",
        "email" => "samir@example.com"
];

for ($i = 0; $i < count($user); $i++) { // on trouve dans les parenthèses du for : valeur de départ; condition d'entrée dans la boucle; variation de $i (incrémentation décrémentation ou autre chose)
    echo $i . '<br>';  // affiche 0 à 9 en 10 tours
}

echo "<pre>";
print_r($users); 
echo "</pre>";
echo"<br>";

?>
