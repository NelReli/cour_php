<?php
ini_set('display_errors', 1);
//display error est activé en mettant valeur 1
ini_set('display_startup_errors', 1);
// doit être activé pour afficher les erreur
error_reporting(E_ALL);
// configure PHP pour signaler tous les types d'erreurs
?>


<!-- Écris un script qui :
Vérifie si la variable $email est définie (isset()).
Vérifie si $email est non vide (!empty()).
Affiche :
✅ "Email valide" si la variable est définie et non vide.
⚠️ "Email vide" si elle est définie mais vide.
❌ "Email non défini" si elle n’existe pas. -->

<?php
$email;

if (isset($email)) {
    if (!empty($email)) {
        echo "✅ Email valide";
    } else {
        echo "⚠️ Email vide";
    }
} else {
    echo "❌ Email non défini";
}
?>

<!-- /** Exercice 1 : Vérifier la validité d'un âge
* 
*  Objectif : Ecrire une condition qui vérifie si une variable age est valide (entre 0 et 120)
*  
*  Afficher un message indiquant si l'âge est valide ou non 
*/ -->


<?php
$age=47;

if(!empty($age) && $age>0 && $age<120){
    echo "<p> Age est valide</p>.<br>";
}else{
    echo "<p> Age n'est pas valide</p>.<br>";
}
?>

<!-- Exercice 9 : Catégoriser une personne selon son âge -->
<!-- Objectif : Ecrire une/des condition(s) qui classe une personnee en 'enfant','adolescent','adulte' ou 'senior' selon son age -->

<?php
$categorie ="pp";

switch($categorie){
    case ($categorie>0 && $categorie<12):
        echo'enfant';
    break;
    case $categorie<18:
        echo'adolescent';
    break;
    case $categorie<55:
        echo'adulte';
    break;
    case ($categorie>55 && $categorie<120):
        echo'senior';
    break;
    default:
        echo 'c\'est un extraterrestre';
    break;
}
?>

<!-- Exercice 10 : 
Vérifier la cohérence des réponses avec l'opérateur XOR
Objectif : Ecrire des conditions et vérifier la cohérence de ces réponses
Exemple : Nous avons une vérification a faire pour vérifier si l'utilisateur se connecte avec son empreinte digitale ou son mdp (il ne peut pas faire les deux en même temps)
xor : L'une des deux conditions doit être vraie seulement, si les deux sont vraies, alors il retournera false
contrairement à || (or) qui vérifiera si au moins l'une des deux conditions est vraie, même si les deux le sont -->

<?php
$motDPasse=true;
$empreinteDig=false;
if($motDPasse XOR $empreinteDig ){
    echo "<p> connexion réussie</p>";
}else{
    echo "<p> échec de connexion</p>";
}
?>

<!-- Exercice 3 : Afficher le jour de la semaine
Objectif : Ecrire une condition 'switch' pour afficher un message en fonction du jour de la semaine, le jour est donnée par une variable $jour en number (1 pour lundi, 2 pour mardi etc...) -->

<?php
$jour=12;

switch($jour){
    case 1:
        echo "<p>On est Lundi</p>";
    break;
    case 2:
        echo "<p>On est Mardi</p>";
    break;
    case 3:
        echo "<p>On est Mercredi</p>";
    break;
    case 4:
        echo "<p>On est Jeudi</p>";
    break;
    case 5:
        echo "<p>On est Vendredi</p>";
    break;
    case 6:
        echo "<p>On est Samedi</p>";
    break;
    case 7:
        echo "<p>On est Dimanche</p>";
    break;
    default:
        echo "<p>c'est pas un jour de la semaine</p>";
    // break;
}
?>

<!-- Exercice 4 : Comparaison de chaines de caractères
Objectif : Ecrire une condition qui compare si deux variables sont identiques, la condition doit vérifier le type ET la valeur  -->

<?php
$var01=12365;
$var02="12365";
if($var01 === $var02){
    echo "<p> les deux variables sont identiques </p>";
}else{
    echo "<p> les deux variables ne sont pas identiques</p>";
}
?>
