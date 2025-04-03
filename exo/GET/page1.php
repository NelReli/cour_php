<!-- créer un dossier pour avec page1 et page2. dans page une créer deux liens : 1 lien contenant article=chemise prix=12 category=vetement. le deuxiement lien est hotel=luxe location-nuit=150 et localisation=barcelone. ces deux liens même à page2 .   -->

<?php

$tab=[
    [
        "article"=>"chemise",
        "prix"=>12,
        "category"=>"vetement"
    ],
];

$tab1=[
    [
        "hotel"=>"luxe",
        "location-nuit"=>150,
        "localisation"=>"barcelone"
    ]
];

foreach($tab as $index){
    $url="page2.php?article=".urlencode($index['article'])."&prix=".urlencode($index['prix'])."&category".urlencode($index['category']);

    echo "<p><a href=\"$url\"> Voir produits : {$index['article']} - {$index['prix']} € - {$index['category']} </a></p><br>";
};


foreach($tab1 as $index1){
    $url1="page2.php?hotel=".urlencode($index1['hotel'])."&location-nuit=".urlencode($index1['location-nuit'])."&localisation".urlencode($index1['localisation']);

    echo "<p><a href=\"$url1\"> Voir produits : {$index1['hotel']} - {$index1['location-nuit']} € - {$index1['localisation']} </a></p><br>";
};



?>


<!-- deuxieme methode -->

<!-- '<a href="page2.php?article=chemise&category=vetement&prix=12">3117</a>';
'<a href="page2.php?hotel=luxe&location-nuit=150&localisation=barcelone">1337</a>'; -->

