
<?php

/**
* Exercice 1 : Créer un tableau d’articles avec leurs prix et les afficher dans une boucle.
*/
$tab=[
    'pomme'=>3,
    'poire'=>2,
    'pasteque'=>3.5,
    'papaye'=>5,
];

foreach($tab as $key=>$val){
    echo "<p>Le fruit $key coute : $val </p>";
}

echo "<pre>";
print_r($tab);
echo "</pre>";

/**
* Exercice 2 : Ajouter un article au tableau et réafficher la liste.
*/

$tab['prune']=2.6;
echo "<pre>";
print_r($tab);
echo "</pre>";

/**
 * Exercice 3 : Créer un panier (tableau), ajouter des articles dynamiquement.
 */

?>

<form action="panier.php"  method="post"  >

    <?php foreach ($tab as $cle=>$valeur){
        echo '<input type="checkbox" name="article" >';
        echo '<label>'.$cle.' </label><br>';
    } ?>
    

    <input type="submit"  value="Envoyer">
</form>


<?php
/**
* Exercice 4 : Calculer le total du panier.
*/

/**
* Exercice 5 : Créer une session pour stocker le panier.
*/


if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = [];
}

// Exercice 6 : Ajouter via lien GET ?add=NomArticle
if (isset($_GET['add'])) {
    $articleAAjouter = $_GET['add'];
    if (isset($articles[$articleAAjouter])) {
        $_SESSION['panier'][] = [
            "nom" => $articleAAjouter,
            "prix" => $articles[$articleAAjouter]
        ];
        echo "<p><strong>$articleAAjouter ajouté au panier !</strong></p>";
    }
}


/**
* Exercice 6 : Gérer l’ajout au panier via un lien (GET)
* Exemple de lien : ?add=Stylo
*/

/**
* Exercice 7 : Utiliser un cookie pour retenir le nom du visiteur.
*/

/**
* Exercice 8 : Créer une page de connexion simple avec login et mot de passe.
*/

/**
* Exercice 9 : Afficher les boutons Connexion / Déconnexion selon l’état de la session.
*/

/**
* Exercice 10 : Créer une fonction utilitaire afficherPanier() qui affiche le contenu du panier.
*/

?>
