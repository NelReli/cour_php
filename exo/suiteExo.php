<?php
/*
|--------------------------------------------------------------------------
| Exercices PHP — Fonctions, Tableaux, Affichage HTML
|--------------------------------------------------------------------------
| Objectif : Approfondir la manipulation de tableaux, l'affichage HTML
| et la création de fonctions utiles dans des cas concrets (panier, fiche produit, etc).
| Niveau : Débutant
*/

echo "<h1>Liste des exercices PHP</h1>";

/* 
* EXERCICE 1 — Afficher une variable simple
* ------------------------------------------
* Crée une variable $prenom avec ton prénom et affiche-la dans une balise <h2>.
*/
echo "<h2>1. Affichage d'une variable</h2>";

$prenom="Nawel";
$nom="Henni";

echo "<h2>$prenom $nom</h2>";

/*
* EXERCICE 2 — Affichage d’une fiche produit
* ------------------------------------------
* Crée un tableau associatif avec 'nom' => 'Stylo', 'prix' => 1.5
* Affiche ces données dans une structure HTML (ex : <div class='card'>).
*/
echo "<h2>2. Affichage d'une fiche produit en HTML</h2>";


$produit=[
    'nom' => 'Stylo',
    'prix' => 1.5
];
?>

    <?php foreach ($produit as $item) { ?>
        <div class="card">
            <p><?php echo $item; ?></p>
        </div>
    <?php } ?>

<?php

/*
* EXERCICE 3 — Boucle sur un tableau simple
* ------------------------------------------
* Crée un tableau de 5 prénoms et affiche-les dans une liste HTML <ul>.
* ➕ Fonction utile : foreach
*/
echo "<h2>3. Liste de prénoms</h2>";

$prenoms=["Nawel", "Ousmane", "Shezad", "Adam", "Najiba"];

echo    "<ul>";
    foreach ($prenoms as $userName){
        echo "<li>$userName </li>";
    }
echo    "</ul>";

/*
* EXERCICE 4 — Générer plusieurs "cartes produit"
* -----------------------------------------------
* À partir d’un tableau contenant plusieurs produits (nom + prix),
* boucler et afficher chaque produit dans une carte HTML.
*/
echo "<h2>4. Cartes produit HTML avec boucle</h2>";

$products=[
    [
        "nom"=>"ecran",
        "prix"=>23
    ],
    [
        "nom"=>"clavier",
        "prix"=>10
    ],
    [
        "nom"=>"souris",
        "prix"=>8
    ]
];

foreach($products as $values) {

    echo    "<div style='border-radius: 15px; border:1px solid black; padding:10px; width:25%'>
                <p style='text-align:center'> ". $values['nom']. "</p>
                <p style='text-align:center'> ". $values['prix']. "</p>
            </div>";
    echo "<br>";
    
}

/*
* EXERCICE 5 — Addition simple
* -----------------------------
* Crée deux variables $prix1 et $prix2, calcule la somme et affiche
* le total sous forme de texte : "Total : XX €"
*/
echo "<h2>5. Addition de deux prix</h2>";

$prix1=22;
$prix2=45;

$calc=$prix1 + $prix2;
echo "<p>Total : $calc €</p>";

/*
* EXERCICE 6 — Ajouter la TVA
* ----------------------------
* Crée une fonction ajouterTVA($prix) qui retourne le prix TTC (20% de TVA).
* ➕ Math : $prix * 1.2
*/
echo "<h2>6. Calcul de la TVA</h2>";

function ajouterTVA($prix){
    return $prixTTC=$prix*1.2;
}

echo ajouterTVA(25);

/*
* EXERCICE 7 — Compter des éléments
* ---------------------------------
* Crée un tableau de produits et affiche le nombre total de produits.
* ➕ Fonction utile : count()
*/
echo "<h2>7. Compter les produits</h2>";

$procts=["1","2","3","4","5","6"];
echo count($procts);

/*
* EXERCICE 8 — Fonction d'affichage réutilisable
* ----------------------------------------------
* Crée une fonction afficherProduit($produit) qui prend un tableau associatif
* et affiche une carte HTML avec le nom et le prix du produit.
*/
echo "<h2>8. Fonction réutilisable pour afficher un produit</h2>";

function afficherProduit($produit){
    foreach($produit as $val ) {
        echo    "<div style='border-radius: 15px; border:1px solid black; width:30%; padding:10px; margin:auto; background-color:black; color:white'>
                    <p style='text-align:center'>" .$val['nom'] ."</p>
                    <p style='text-align:center'>" .$val['prix'] ."</p>
                </div>";
        echo "<br>";
    }
}

$products=[
    [
        "nom"=>"ecran",
        "prix"=>23
    ]
];

afficherProduit($products);

/*
* EXERCICE 9 — Total du panier
* -----------------------------
* À partir d’un tableau de produits (chacun avec 'nom' et 'prix'),
* calcule et affiche le total général avec une boucle.
*/
echo "<h2>9. Total d'un panier</h2>";


$prod=[
    [
        "nom"=>"ecran",
        "prix"=>23
    ],
    [
        "nom"=>"clavier",
        "prix"=>10
    ],
    [
        "nom"=>"souris",
        "prix"=>8
    ]
    ];
    
$cal=0;
foreach($prod as $i=>$val){
    $cal+=$val['prix'];
}

echo "Le total général est : ". $cal;

/*
* EXERCICE 10 — Appliquer une remise
* ----------------------------------
* Crée une fonction appliquerRemise($prix, $pourcentage)
* qui retourne le prix après réduction.
*/
echo "<h2>10. Prix avec remise</h2>";

function appliquerRemise($prix, $pourcentage){
    $r=$prix*$pourcentage/100; //$sr=$prix*(1-$pourcentage/100)
    $remise=$prix-$r;
    return $remise;
}

echo appliquerRemise(75, 25);


/*
* EXERCICE 11 — Ajouter au panier
* -------------------------------
* Crée une fonction ajouterAuPanier($panier, $produit)
* qui retourne un nouveau tableau avec le produit ajouté.
*/
echo "<h2>11. Ajouter un produit au panier</h2>";

function ajouterAuPanier($panier, $produit){
    $panier[]=$produit;
    return $panier;
}

$panier=["3"];
$produit="pro";

$panierTotal=ajouterAuPanier($panier, $produit);

echo"<pre>"; 
print_r($panierTotal);
echo"</pre>";

echo "<button style='border-radius:50%'>". count($panierTotal) ."</button>";


/*
* EXERCICE 12 — Afficher un panier vide ou non
* --------------------------------------------
* Vérifie si un tableau $panier est vide. S'il l’est, afficher un message,
* sinon, afficher les produits.
* ➕ Fonction utile : empty()
*/
echo "<h2>12. Vérification panier vide ou rempli</h2>";

$pan=["produit01","produit02","produit03"];

if(!empty($pan)){
    foreach($pan as $prod){
        echo    "<ul> 
                    <li>$prod</li>
                </ul>";
    }
}else{
    echo "<p>le panier est vide</p>";
}


/*
* EXERCICE 13 — Moyenne des notes
* -------------------------------
* Crée un tableau de notes (ex : [12, 14, 18]) et calcule la moyenne.
* ➕ Fonctions utiles : array_sum(), count()
*/
echo "<h2>13. Moyenne d'un tableau</h2>";

$notes=[12, 14, 18];
$moyenne=array_sum($notes)/count($notes);
echo $moyenne;

/*
* EXERCICE 14 — Trier un tableau
* -------------------------------
* Crée un tableau de prix, trie-le par ordre croissant.
* ➕ Fonction utile : sort()
*/
echo "<h2>14. Tri des prix croissants</h2>";

$price=[12,25,63,11,10];
sort($price);
echo"<pre>";
print_r($price);
echo"</pre>";


/*
* EXERCICE 15 — Filtrer produits à moins de 10 €
* ------------------------------------------------
* Crée une fonction qui retourne un tableau avec uniquement
* les produits à moins de 10€.
*/
echo "<h2>15. Filtrer les produits abordables</h2>";

function prixBas($tab){

return array_filter($tab, function($i) {
    return $i < 10;
} );
}

$arr = [2,25,63,11,8];
echo"<pre>";
print_r(prixBas($arr));
echo"</pre>";

/*
* EXERCICE 16 — Tableau d’utilisateurs
* -------------------------------------
* Crée un tableau avec plusieurs utilisateurs (nom, email, âge)
* et affiche-les dans des cartes HTML.
*/
echo "<h2>16. Fiches utilisateurs</h2>";

/*
* EXERCICE 17 — Table de multiplication
* --------------------------------------
* Crée une fonction tableMultiplication($n) qui affiche la table du nombre donné.
*/
echo "<h2>17. Table de multiplication</h2>";

function tableMultiplication($n,$k){
    for($i=1; $i<$k; $i++){
        $result=$n*$i;
        echo "<p> $n x $i = $result</p>";
    }
}

tableMultiplication(20,20);

/*
* EXERCICE 18 — Formater un prix
* -------------------------------
* Crée une fonction formaterPrix($prix) qui :
*  - affiche 2 chiffres après la virgule
*  - ajoute "€"
* ➕ Fonction utile : number_format()
*/
echo "<h2>18. Formater un prix</h2>";

function formaterPrix($prix){
    foreach($prix as $price){
        print number_format($price,2,",")." € <br>";
    }
}

$tab=[125, 9.9 , 25 , 2.369];

print_r (formaterPrix($tab));

/*
* EXERCICE 19 — Afficher les produits chers
* ------------------------------------------
* À partir d’un tableau de produits, affiche uniquement ceux
* dont le prix est > 50€.
*/
echo "<h2>19. Filtrer les produits chers</h2>";

$prod2=[
    [
        "nom"=>"ecran",
        "prix"=>230
    ],
    [
        "nom"=>"clavier",
        "prix"=>100
    ],
    [
        "nom"=>"souris",
        "prix"=>45
        ]
    ];

foreach ($prod2 as $val){
    if ($val["prix"] >50){
        echo "<p>".$val["prix"]."</p>";
    }
}

/*
* EXERCICE 20 — Simuler un panier complet
* ----------------------------------------
* À partir d’un tableau de produits avec :
*  - nom
*  - prix unitaire
*  - quantité
* Affiche chaque ligne avec prix total (prix * quantité)
* puis affiche le total global du panier.
*/
echo "<h2>20. Panier complet (HTML + Calcul)</h2>";

$array=[
    [
        "nom"=>"ecran",
        "prix"=>23,
        "quantite"=>23
    ],
    [
        "nom"=>"clavier",
        "prix"=>10,
        "quantite"=>10
    ],
    [
        "nom"=>"souris",
        "prix"=>8,
        "quantite"=>8
    ]
];

foreach ($array as $valeur){
    echo "<p>".$valeur['prix']*$valeur['quantite']."</p>";

}

?>