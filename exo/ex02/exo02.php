<?php
function afficherInfos($tableau){
    foreach($tableau as $cle=>$valeur){
        echo "$cle : $valeur <br>";
    }
};

$personne=[
    "nom"=>"Henni", 
    "prenom"=>"Nel", 
    "age"=>48,
    "ville"=>"oran"
];

afficherInfos($personne);

?>


<?php
function ajouterElement($tableau, $cle, $valeur){
    $tableau[$cle]=$valeur;
    return $tableau;
};

$personne2=[
    "nom"=>"Henni", 
    "prenom"=>"Nel", 
    "age"=>48,
    "ville"=>"oran"
];

echo "<pre>";
print_r( ajouterElement($personne2, 'profession', 'concepteur'));
echo "</pre>";

?>


<?php
function supprimerElement($tableau, $cle){
    unset($tableau[$cle]);
    return $tableau;
};

$personne3=[
    "nom"=>"Henni", 
    "prenom"=>"Nel", 
    "age"=>48,
    "ville"=>"oran"
];

echo "<pre>";
print_r(supprimerElement($personne3, 'age'));
echo "</pre>";

?>


<?php
function trierTableau($tableau){
    sort($tableau);
    return $tableau;
};

$personne4=[
    "nom"=>"Henni", 
    "prenom"=>"Nel", 
    "age"=>48,
    "ville"=>"oran"
];

echo "<pre>";
print_r(trierTableau($personne4));
echo "</pre>";

?>


<?php

function filtrerNotes($notes, $seuil) {
    return array_filter($notes, function($note) use ($seuil) {
        return $note >= $seuil;
    });
}


$notes=[
    "Alice" => 15,
    "Bob" => 9,
    "Charlie" => 18,
    "David" => 12
];

$seuil=10;
$resultat=filtrerNotes($notes, $seuil);
echo "<pre>";
print_r($resultat);
echo "</pre>";

?>


<?php
function filtrerNotes2($notes, $seuil) {
    $resultat = [];
    foreach ($notes as $nom => $note) {
        if ($note >= $seuil) {
            $resultat[$nom] = $note;
        }
    }
    return $resultat;
}

// Exemple d'utilisation
$notesEtudiants = [
    "Alice" => 15,
    "Bob" => 9,
    "Charlie" => 18,
    "David" => 12
];


print_r(filtrerNotes2($notesEtudiants, 10));

?>

