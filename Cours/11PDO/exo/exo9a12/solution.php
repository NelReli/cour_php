<?php
echo "<h3> EXO 09 </h3>";

$tab = ["Nawel","Ousmane","Shezad","Adam","Nassuf"];

foreach($tab as $valeur){
    echo "<ul>";
    echo "<li> $valeur</li>";
    echo "</ul>";
}

echo "<br>";
echo "<h3> EXO 10 </h3>";
$tab_ass = [
    [
        'nom'=>'Paul',
        'age'=> 23
    ],
    [
        'nom'=>'Paolo',
        'age'=> 29
    ],
    [
        'nom'=>'Pauline',
        'age'=> 58
    ],
];

foreach($tab_ass as $cle => $valeur){
    echo "<ul>";
    echo "<li>". $valeur['nom']." à ".$valeur['age']." ans</li>";
    echo "</ul>";
}

echo "<br>";
echo "<h3> EXO 11 </h3>";

$tab1 = [12,21,50,5,39];

sort($tab1);
echo "<pre>";
print_r($tab1);
echo "</pre>";

echo "<br>";

rsort($tab1);
echo "<pre>";
print_r($tab1);
echo "</pre>";

echo "<br>";
echo "<h3> EXO 12 </h3>";
?>