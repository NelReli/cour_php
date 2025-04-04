<?php

$personne=[
    "nom"=>"Henni", 
    "prenom"=>"Nel", 
    "age"=>48,
    "ville"=>"oran"
];

echo "<pre>";
print_r($personne);
echo "</pre>";

$personne['prefession']="concepteur web";

echo "<pre>";
print_r($personne);
echo "</pre>";

unset($personne['age']);

echo "<pre>";
print_r($personne);
echo "</pre>";

?>

<?php

$produit=[
    "nom"=>"chaise", 
    "prix"=>19.99, 
    "quantite"=>48,
];

echo $produit['nom']."<br>";
echo $produit['prix']."<br>";
echo $produit['quantite']."<br>";

?>

<?php

$livres=[
    [
    "titre"=>"les évadés", 
    "auteur"=>"john doe", 
    "année"=>2024
    ],
    [
    "titre"=>"Ali et les 40 voleurs", 
    "auteur"=>"john doe", 
    "année"=>2024
    ],
    [
    "titre"=>"Les piliers de la terre", 
    "auteur"=>"john doe", 
    "année"=>2024
    ]
];

foreach($livres as $livre){
    echo $livre['titre']."<br>";
}

?>