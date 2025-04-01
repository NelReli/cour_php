<?php

/*1. Fonction sans paramètres et sans valeur de retour
Exercice : Créez une fonction appelée greet() qui affiche "Hello, world!" lorsqu'elle est appelée.*/

function greet(){
    echo "Hello, world!<br>";
    echo "<br>";
}

greet();


/*2. Fonction avec paramètres et sans valeur de retour
Exercice : Créez une fonction appelée greetUser() qui prend un paramètre $name et affiche "Hello, [name]!" où [name] est la valeur passée à la fonction.*/

function greetUser($name){
    global $name;
    echo "Hello, $name!<br>";
    echo "<br>";
}
$name="Nawel";
greetUser($name);

/*3. Fonction avec paramètres et avec valeur de retour
Exercice : Créez une fonction appelée sum() qui prend deux paramètres $a et $b, les additionne, et retourne le résultat.*/

function sum($a,$b){
    $result=$a+$b;
    return $result."<br>";
    echo "<br>";
}

echo sum(3,5);

/*4. Fonction qui calcule la somme des nombres d'un tableau
Exercice : Créez une fonction appelée sumArray($numbers) qui prend un tableau de nombres $numbers en paramètre et retourne la somme de tous les éléments du tableau.*/

function sumArray($numbers){
    $somme=0;
    for($i=0; $i<=count($numbers); $i++){
        $somme+=$numbers[$i];
    }
    return $somme;
    echo "<br>";
}
$numbers=[1,2,3,4];
echo "resultat ".sumArray($numbers)."<br>";
echo "<br>";

//-----------------------------

function sumArray1($numbers1){

    $somme1=0;
    foreach($numbers1 as $values){
        $somme1+=$values;
        }
        return $somme1;
        echo "<br>";
}
$numbers1=[1,2,3,4];
echo sumArray1($numbers1)."<br>";
echo "<br>";

//-----------------------------

function sumArray2($numbers2){
    return array_sum($numbers2);
    echo "<br>";
}
$numbers2=[1,2,3,4];
echo sumArray2($numbers2)."<br>";
echo "<br>";



/*5. Fonction avec paramètre par défaut
Exercice : Créez une fonction appelée greetWithTime() qui prend deux paramètres, un nom $name et un moment de la journée $timeOfDay (par défaut "day"), et qui affiche "Good [timeOfDay], [name]!
Rappel = vous pouvez ajouter une valeur au paramètre de fonction directement comme on a vu (exemple : function salut($name='Cynthia'){echo "Salut $name";})".*/

function greetWithTime($name,$timeOfDay="day"){
    echo "Good $timeOfDay, $name <br>";
    echo "<br>";
}

$timeOfDay="evening";
greetWithTime($name,$timeOfDay);

//-----------------------------

function greetWithTime2($name,$timeOfDay="day"){

    $hours=date("h");
    if($hours<12){
        $timeOfDay="morning";
    }else if ($hours<18){
        $timeOfDay="evening";
    }else{
        $timeOfDay="night";
    }
    echo "Good $timeOfDay $name";
    echo "<br>";
}

greetWithTime2($name);

/*6. Fonction qui retourne un tableau
Exercice : Créez une fonction appelée getFruits() qui ne prend aucun paramètre et retourne un tableau contenant trois noms de fruits.*/

function getFruits(){
    return ["ananas","pomme","kiwi"];
}

echo "<pre>";
print_r (getFruits());
echo "</pre>";
echo "<br>";



/*7. Fonction avec une chaîne de caractères comme paramètre
Exercice : Créez une fonction appelée reverseString($str) qui prend une chaîne de caractères $str en paramètre et retourne cette chaîne en ordre inversé.*/


function reverseString($str){
    echo strrev($str)."<br>"; 
    echo "<br>";
}

$str="Bonjour le monde";
reverseString($str);

//-----------------------------

function reverseString1($str){
    if (is_string($str)) {
        return strrev($str) . "<br>";
    }else{
        return "Erreur lors de l'inversion de la chaîne.<br>";
    }
}

$naw= "256789";
echo reverseString($naw);

//-----------------------------


function reverseString2($str) {
    $reverse = "";

    $i = strlen($str) - 1;
    while($i >= 0) {
        $reverse .= $str[$i];
        $i--;
    }

    // for ($i = strlen($str) - 1; $i >= 0; $i--) {
    //     $reverse .= $str[$i];
    // }

    return $reverse;
}

echo reverseString2("elicaF");


/*8. Fonction avec paramètres et vérification de type
Exercice : Créez une fonction appelée divide($a, $b) qui prend deux paramètres $a et $b. La fonction doit vérifier que $b n'est pas égal à 0 avant de diviser $a par $b et retourner le résultat. Si $b est égal à 0, la fonction doit retourner un message d'erreur.*/

function divide($a, $b){
    if ($b!==0){
        $div=$a/$b;
        return "Le résultat est : $div <br>";
    }else{
        return "Message erreur: on ne peut pas diviser par 0"."<br>";
    }
}

echo divide(2,2);
echo "<br>";
echo divide(2,0);
echo "<br>";

/* 9. Fonction qui utilise une boucle pour générer un résultat
Exercice : Créez une fonction appelée generateMultiplicationTable($number) qui prend un nombre $number en paramètre et retourne un tableau contenant la table de multiplication de ce nombre de 1 à 10.*/

function generateMultiplicationTable($number){
    
    for ($n=1; $n<=10; $n++){
        $resultat[$n]=$n*$number;
    }

    // foreach($resultat as $n=> $result){
    //     echo "$number x $n = $result<br>";
    // }

    echo "<pre>";
    print_r($resultat);
    echo "</pre>";
    echo "<br>";
}

generateMultiplicationTable(9);
echo "<br>";

//-----------------------------

function generateMultiplicationTable2($number){
    $i=1;
    while($i<=10){
        $resultat1[$i]=$i*$number;
        $i++;
    }

    // foreach($resultat1 as $i=> $result1){
    //     echo "$number x $i = $result1<br>";
    // }

    echo "<pre>";
    print_r($resultat1);
    echo "</pre>";
    echo "<br>";
}
generateMultiplicationTable2(8);



/* 10. Fonction avec une condition complexe
Exercice : Créez une fonction appelée checkEligibility($age, $hasLicense) qui prend en paramètre un âge $age et un booléen $hasLicense. La fonction doit retourner "Eligible" si l'utilisateur a 18 ans ou plus et possède un permis de conduire, sinon "Not Eligible".*/

function checkEligibility($age, $hasLicense){
    if(($age>=18) && ($hasLicense===true)){
        return "<p> Vous êtes eligible </p><br>";
    }else{
        return "<p> Vous n'êtes pas eligible </p><br>";
    }
}

$age=18;
$hasLicense=true;
echo checkEligibility($age, $hasLicense);



?>