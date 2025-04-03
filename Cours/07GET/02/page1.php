<?php

$produits = [
    [
        'article' => 'jean',
        'couleur' => 'bleu',
        'prix' => 49.99,
        "description"=>"imply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining"
    ],
    [
        'article' => 't-shirt',
        'couleur' => 'blanc',
        'prix' => 19.99,
        "description"=>"imply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining"
    ],
    [
        'article' => 'chaussures',
        'couleur' => 'noir',
        'prix' => 89.90,
        "description"=>"imply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining"
    ]
];

foreach($produits as $produit){
    // construction de l'URL
    $url="page2.php?article=".urlencode($produit["article"])."&couleur=".urlencode($produit["couleur"])."&prix=".urlencode($produit["prix"])."&description=".urlencode($produit["description"]);


    echo "<p><a href = \"$url\"> voir le produit : {$produit['article']} - {$produit['couleur']} - {$produit['prix']} € </a></p>"; // methode d'ecriture avec {}

    echo "<p><a href = \"$url\"> voir le produit : ".$produit['article']." - ". $produit['couleur']." - ". $produit['prix']." € </a></p>"; 
}

?>

<!-- ----------------------------------- -->
<h3>     La fonction urlencode() :     </h3>
<!-- ----------------------------------- -->


<p> Cette fonction sert à préparer une chaine de caractère pour être utiliser dans une URL</p>
<p> Pour passer du texte sans l'abîmer</p>

<p> Exemple :</p>

<?php

echo "<a href='page2.php?nom=jean pierre&ville=St-étienne'>Aller </a>";
// l'URL est cassée à cause de l'espace et des caractères spéciaux.

// avec urlencode()

$nom = 'Jean Pierre';
$ville = 'St-Étienne';

$url = 'page2.php?nom=' . urlencode($nom) . '&ville=' . urlencode($ville);
echo '<a href="' . $url . '"> Aller</a>';

// URL générée :

// perl

// page.php?nom=Jean+Pierre&ville=St-%C3%89tienne
// ✅ Fonctionne parfaitement, l’URL est propre et sécurisée.


?>