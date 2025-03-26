<!-- ------------------------------- -->
<h2>Structures conditionnelles</h2>
<!-- ------------------------------- -->


<?php

// if else
//----------

$a=10;
$b=20;
$c=22;

if ($a>$b){
    echo "<p> a est plus grand que b </p>";
}else{
    echo "<p> b est plus grand que a </p>";
}


if ($a>$c && $b>$c){
    echo "<p> \$c est plus petit que \$a et \$b </p>";
}else{
    echo "<p> \$c est plus grand que \$a et \$b </p>";
}

// if elseif else
//---------------

if($a===8){
    echo'<p> $a est égale à 8 </p>';
}else if($a !=10){
    echo'<p> $a est different de 10 </p>';
}else{
    echo '<p> les deux conditions sont fausses </p>';
}

// Switch
//---------

// la condition switch est une autre syntaxe du if/else quand on veut comparer une variable à une multiple valeur.

$couleur = 'rouge';

switch ($couleur) {
    case 'bleu' : // on compare $couleur à la valeur des "case" et exécute le code qui suit les ":" si elle correspond
        echo 'Vous aimez le bleu <br>';
    break;  // break est obligatoire pour quitter la condition une fois le case exécuté
    
    case 'rouge' :
        echo 'Vous aimez le rouge <br>';
    break;  

    case 'vert' :
        echo 'Vous aimez le vert <br>';
    break; 

    default:  // cas par défaut si on n'entre pas dans les cases précédents (équivalent du else)
        echo 'Vous n\'aimez aucune de ces couleurs <br>';    
}

?>


<!-- ------------------------------- -->
<h2>Opérateurs de comparaison</h2>
<!-- ------------------------------- -->


<?php

// l'operateur XOR
//-----------------

$question1="mineur";
$question2="je vote";

if($question1 === "mineur" XOR $question2==="je vote"){
    echo "<p> vos réponses sont cohérentes </p>";
}else{
    echo "<p> vos réponses ne sont pas cohérentes </p>";
}

// exemple 02
$username = "user123";
$email = "";
$password = "password123";

if (($username && $password) XOR ($email && $password)) {
    echo "<p>Connexion réussie</p>";
} else {
    echo "<p>Veuillez fournir soit un nom d'utilisateur et un mot de passe, soit une adresse e-mail et un mot de passe, mais pas les deux.</p>";
}


// l'operateur AND écrit &&
//--------------------------

$var1=2;
$var2=3;
$var3=4;

if($var1>$var2 && $var2>$var3){
    echo " les deux conditions sont vraies";
}else{
    echo " au moins une des deux conditions est fausse";
}


// l'operateur OR écrit ||
//-------------------------

if($a===9 || $b>$c){ // si $a est strictement égale à 9 ou si $b est plus grand que $c
    echo "<p> Ok pour au moins une des deux conditions </p>";
}else{
    echo "<p> Les deux conditions sont fausses </p>";
}

// Comparaisons entre == et ===
//------------------------------

$varA=1;
$varB="1";

echo gettype($varA)."<br>"; //Integer
echo gettype($varB)."<br>"; //String

if ($varA == $varB){
    echo "<p> \$varA est égale à \$varB en valeur</p>";
}

if ($varA === $varB){
    echo "<p> \$varA est à \$varB en valeur et en type </p>";
}else{
    echo "<p> \$varA n'est pas égale à \$varB en valeur et en type </p>";
}

// dans cette deuxième condition $varA n'est pas strictement égale à $varB en valeur et en type.

$varC; // declaration de variable
$varC=1; // initialisatio / affectation

/**
 * 
 * = signe d'affectation
 * == signe de comparaison en valeur
 * === signe de comparaison en valeur et en type
 * 
 */


// isset() et empty ()
//----------------------


echo "<h2> isset () et empty() </h2>";

// Définition

// isset() vérifie si une variable est définie (si la variable existe) et à une valeur qui n'est pas NULL

// empty() vérifie si une variable est vide (si la variable n'existe pas ou si elle à une valer vide) 

// une variable est considéré comme vide quand :
/**
 * $varc="";// string vide
 * $varc=0; // integer0
 * $varc=NULL; // NULL
 * $varc=0.0; // float 0.0
 * $varc=[]; // array vide
 **/

//  La fonction isset() permet de vérifier si une variable est définie et n'est pas null. Contrairement à empty(), isset() ne considère pas les valeurs false, 0, "", etc., comme vides. Elle vérifie uniquement si la variable existe et n'est pas null.

//  La fonction empty() permet de vérifier si une variable est vide. Une variable est considérée comme vide si elle a l'une des valeurs suivantes :
//  null
//  false
//  0 (zéro)
//  0.0 (zéro en tant que nombre à virgule flottante)
//  "0" (zéro en tant que chaîne de caractères)
//  "" (chaîne de caractères vide)
//  array() (tableau vide)


$varD="";

echo empty($varD)."<br>";
echo isset($varD)."<br>";

if (empty($varD)){
    echo "<p> \$vartt est vide </p>";
}else{
    echo "<p> \$vartt n'est pas vide </p>";
}


$var1 = 0;
$var2 = '';

if (empty($var1)) echo '0, vide, NULL, false ou non défini <br>';  // ici la condition est vraie car $var1 est vide au sens de empty (voir la définition ci-dessus)
if (isset($var2)) echo 'existe et non NULL <br>'; 
// Si on ne déclare pas les variables $var1 et $var2 lignes 157 et 158, la condition avec empty reste vraie (car non définie), mais la condition avec isset devient fausse (car la variable ne serait pas définie)

// Exemples d'utilisation : empty pour vérifier qu'un champ de formulaire est vide. isset qu'une variable existe bien avant de l'utiliser.


$tab2=[
    "user"=>"mohamed",
    "connexion"=>false
];

if(!empty($tab2)){
    // je demande si $tab2["user"] et $tab2["user"] n'est pas vide
    if(isset($tab2["user"]) && !empty($tab2["user"])){
        echo "<h5>Bonjour ".$tab2["user"]."</h5>";
          // si $tab2["connexion"] existe dans le tableau et n'est pas vide
        if( isset($tab2["connexion"]) && !empty($tab2["connexion"] )){
            echo "<button>DECONNEXION</button>";
        }else{
            echo "<button>SE CONNECTER</button>";
        }

    }else{
        echo "<h5>Bonjour invité</h5>";

    }
}





?>