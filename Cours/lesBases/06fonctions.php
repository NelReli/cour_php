<!-- ------------------------------- -->
<h2> /** Les Fonctions **/ </h2>
<!-- ------------------------------- -->

<h4>Quelques fonctions prédéfinies</h4>
<p>Permet de réaliser un traitement spécifique prédéterminé en PHP</p>

<?php

// fonctions pour les chaines de caractères
//------------------------------------------


// 1 **** strpos ****
//-------------------

$email="prenom@site.fr";
strpos($email,"@");// affiche la position de "@" l'element selectionne dans la chaine de caractère

if (strpos($email,"@")){
    echo "Mail correct <br>";
}else{
    echo "Mail incorrect <br>";
}

// 2 **** substr ****
//-------------------

$text="          je suis un long texte très très long texte et pas de place dans la div           ";

echo $text ."<br>";

$text_modif = substr($text,0,21);
echo "$text_modif .....<br>";


// 3 **** strlen ****
//--------------------

echo $text."<br>";
echo "longueur du texte : ".strlen($text)."<br>"; // donne la longueur de la chaine de caractère



// 4 **** trim ****
//-------------------

echo trim($text)."<br>"; // efface les espaces au début et à la fin de la chaine de caractère
echo strlen(trim($text))."<br>";

// fonctions pour les tableaux
//------------------------------


// 5 **** is_array ****
//----------------------

$tab=[
    "id"=>123,
    "email"=>"g@gmail.com",
    "names"=>[
        "name1"=>"fab",
        "name2"=>"seb",
    ],
    "role"=>"user"
];

foreach ($tab as $index=>$valeur){
    if(is_array($valeur)){ // si $valeur est un tableau tu boucle
        foreach($valeur as $value){
            echo "les valeurs : $value <br>";
        }
    }else{
        echo "<hr> $index est : $valeur <hr>";
    }
}

?>

<!-- ------------------------------- -->
<h4> /** Création d'une fonction **/ </h4>
<!-- ------------------------------- -->
<p>les fonctions sont un morceaux de codes encapsulés dans les accolades et portant un nom, qu"on appelle au besoin pour executer un script</p>

<?php

//**** function ****/
//-------------------

function hr(){ // création d'une fonction
    echo "<hr>"; // cette fonction affiche un echo de hr
};

hr(); // on appelle la fonction 
hr(); // on appelle l'appeler plusieurs fois dans la même fonction


//**** function avec return ****/
//-------------------------------

function bonjour(){
    return "bonjour";
}

echo bonjour()."<br>";// affiche bonjour


//**** function avec return et paramètre ****/
//---------------------------------------------

function bonjour2($qui){// ceci est un paramètre
    return "Bonjour ".$qui;
}

$var=bonjour2("sekene");// ceci est un argument
echo $var."<br>";


$a=2;
$b=3;

function calc($x,$y){// ceci est un paramètre
    $resultat= $x+$y;
    return $resultat;
}

echo "le résultat est : ".calc($a,$b)."<br>";

function calcul(){
    global $a; // pour déclarer une variable globale qui sera la même dans tout le fichier et l'appeler en dehors de la fonction
    global $b;
    $resultat=$a+$b;
    return $resultat;
}

echo calcul();// donne 5


// Variables locales et variables globales
// de l'espace local à l'espace global
//-------------------------------------

$var6=6; // c'est une variable globale en dehors d'une fonction

function jour(){
    $jour = "mardi";// la variable $jour est une variable locale de la fonction
    return $jour;

}

echo jour();
$jourMardi=jour(); // on stoque la valeur de $jour (variable locale) dans une nouvelle variable

// de l'espace global à l'espace local
//--------------------------------------

$pays="Maroc";// variable global
function afficherPays(){
    global $pays; // le mot clé global permet de récuperer une variable globale au sein d'une fonction
    echo $pays;// affiche Maroc
}


?>

