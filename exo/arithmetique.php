
<?php
include_once "../Cours/utils.php";
?>

<!-- /** Exercice 1 : Opérateurs de base

1 . Objectif : calculer des variables avec les opérateurs de base
    * Déclarer deux variables $a et $b avec des valeurs de votre choix (int)
    * Utilisez les opérateurs arithmétiques pour calculer les variables avec les opérateurs suivants (addition +, soustraction -, multiplication * , division / et modulo %), puis afficher le résultat -->

<?php
$a = 15;
$b = 30;

echo $a + $b;
br();

echo $a - $b;
br();

echo $a * $b;
br();

echo $a / $b;
br();

echo $a % $b;
br();

?>

<!-- /** Exercice 2 : Opération combinées

1 . Objectif : calculer ces même variables en utilisant la syntaxe des opérateur d'affectation combinés (+=)
2 . Objectif : calculer ces même variables en utilisant la syntaxe des opérateur d'affectation combinés (+=) -->

<?php
$a = 15;
$b = 30;

echo $a += $b;
br();

echo $a -= $b;
br();

echo $a *= $b;
br();

echo $a /= $b;
br();

echo $a %= $b;
br();

?>


<!-- /** Exercice 3 : Incrémentation et décrémentation (préfixe = ++$variable)

* Objectif : Calculer une variable avec l'incrémentation et la décrémentation en préfixe
1 . Déclarer une variable $counter initialisée à 10;
2 . incrémenter cette valeur de 1;
3 . Réinitialiser $counter à 10 et décrémenter de 1
Afficher tous les résultats -->

<?php
$counter = 10;

echo ++$counter;
br();

$counter = 10;

echo --$counter;
br();

?>

