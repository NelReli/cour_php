<?php

echo "================ TABLEAUX =================\n\n";


// array_push() : Ajoute des éléments à la fin d'un tableau

$fruits = ["pomme", "banane"];

echo "<pre>";
array_push($fruits, "orange");
echo "</pre>";

echo "array_push : ajoute 'orange'<br>";

print_r($fruits);

// array_pop() : Supprime le dernier élément

array_pop($fruits);

echo "array_pop : retire le dernier élément<br>";

print_r($fruits);

// array_unshift() : Ajoute au début

array_unshift($fruits, "kiwi");

echo "array_unshift : ajoute 'kiwi' au début<br>";

print_r($fruits);

// array_keys() : Renvoie les clés d’un tableau

$infos = ["nom" => "Alice", "email" => "alice@test.com"];

echo "array_keys : affiche les clés<br>";

print_r(array_keys($infos));

// in_array() : Vérifie si une valeur est présente

echo "in_array : 'Alice' est-il dans les valeurs ? ";

echo in_array("Alice", $infos) ? "Oui<br>" : "Non<br>";

// count() : Compte le nombre d’éléments

echo "count : nombre de fruits = " . count($fruits) . "<br>";


echo "================ CHAINES =================<br>";


// strlen() : Longueur d’une chaîne

$txt = " Hello ";

echo "strlen : longueur de '$txt' = " . strlen($txt) . "<br>";

// trim() : Supprime les espaces

echo "trim : sans espaces = '" . trim($txt) . "'<br>";

// strtoupper() / strtolower()

echo "strtoupper : " . strtoupper("bonjour") . "<br>";

echo "strtolower : " . strtolower("BObOUR") . "<br>";

// ucfirst() : Majuscule à la 1re lettre

echo "ucfirst : " . ucfirst("salut") . "<br>";

// explode() : Découpe une chaîne

echo "<br>";

$csv = "un,deux,trois";

echo "<pre>";

echo print_r($csv);

echo "</pre>";

echo "<br>";


echo "explode : découpe 'un,deux,trois'<br>";

print_r(explode(",", $csv));

echo "<pre>";

echo print_r(explode(",",$csv));

echo "</pre>";

// implode() : Transforme un tableau en chaîne

$tab = ["PHP", "HTML", "CSS"];

echo "implode : ";

echo implode(" - ", $tab) . "<br>";


echo "================ MATH =================<br>";


// abs() : valeur absolue

echo "abs(-10) = " . abs(-10) . "<br>";

// round() : arrondi standard

echo "round(4.6) = " . round(4.6) . "<br>";

// floor() / ceil()

echo "floor(4.8) = " . floor(4.8) . "<br>";

echo "ceil(4.1) = " . ceil(4.1) . "<br>";

// rand() : nombre aléatoire

echo "rand(1, 10) = " . rand(1, 10) . "<br><br>";


echo "================ DATES =================<br><br>";


// date() : formatage de la date

echo "date : " . date("Y-m-d H:i:s") . "<br>";

// time() : timestamp actuel

echo "time : " . time() . "<br>";

// strtotime() : convertir une date en timestamp

$ts = strtotime("2025-01-01");

echo "strtotime('2025-01-01') = " . $ts . "<br>";

echo "formaté = " . date("d/m/Y", $ts) . "<br><br>";


echo "================ AUTRES =================<br><br>";


// isset() : variable définie ?

$val = "test";

echo "isset(\$val) : " . (isset($val) ? "Oui<br>" : "Non<br>");

// empty() : variable vide ?

$vide = "";

echo "empty(\$vide) : " . (empty($vide) ? "Oui<br>" : "Non<br>");

// is_array()

echo "is_array(\$fruits) : " . (is_array($fruits) ? "Oui<br>" : "Non<br>");

// var_dump() : type + valeur

echo "var_dump de \$tab :<br>";

var_dump($tab);

// print_r() : affiche un tableau

echo "print_r de \$infos :<br>";

print_r($infos);

// die() : termine le script (commenté ici)

// die("Arrêt du script");

// include() : pour inclure un fichier PHP

echo "<br>include() permet d'intégrer un fichier PHP externe.<br>";

echo "<br>🎉 Fin du script test des fonctions prédéfinies PHP 🎉<br>";

?>
