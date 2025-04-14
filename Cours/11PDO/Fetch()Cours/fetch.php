<link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">

<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
// Connexion à la base de données avec PDO
$dsn = 'mysql:host=localhost;dbname=ecole;charset=utf8';
$user = 'root';       // À adapter
$password = '';       // À adapter

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connexion etablie <br>";
} catch (PDOException $e) {
    die('Erreur de connexion : ' . $e->getMessage()); // die cest comme exit
}


// récuperer un seul élève :
//---------------------------

$sql="SELECT * FROM eleves";

$stmt = $pdo->prepare($sql);
var_dump($stmt);
$stmt->execute();

echo"<pre>";
print_r(get_class_methods($stmt));
echo "</pre>";

$eleves= $stmt->fetch(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC : demande affichage en tableau associatif
$eleves2= $stmt->fetch(PDO::FETCH_ASSOC); // quand on fait un deuxieme fetch il prend le suivant ainsi de suite


echo"<pre>";
print_r($eleves);
echo "</pre>";

echo"<pre>";
print_r($eleves2);
echo "</pre>";


// récuperer tous les élèves  :
//-----------------------------

$sql="SELECT * FROM eleves";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$eleves= $stmt->fetchAll(PDO::FETCH_ASSOC);

echo"<pre>";
print_r($eleves);
echo "</pre>";

// récuperer un eleve par id  :
//-----------------------------

$sql="SELECT * FROM eleves WHERE id = 5";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$eleve= $stmt->fetch(PDO::FETCH_ASSOC);

echo"<pre>";
print_r($eleve);
echo "</pre>";

// trier par ordre alphabétique  :
//-----------------------------

// avec requete sql

$sql="SELECT * FROM eleves ORDER BY nom";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$eleves= $stmt->fetchAll(PDO::FETCH_ASSOC);

echo"<pre>";
print_r($eleves);
echo "</pre>";

foreach($eleves as $nom){
    echo "<strong>Nom :</strong> ".$nom['nom']." <strong>ID N° :</strong> ". $nom['id']. " <strong>Ordinateur_numero :</strong> ". $nom['ordinateur_numero']."<br>";
}

// avec des fonctions PHP

$sql="SELECT * FROM eleves";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$eleves= $stmt->fetchAll(PDO::FETCH_ASSOC);

echo"<pre>";
print_r($eleves);
echo "</pre>";

$listeNoms = array_column($eleves, 'nom'); // array_column pour recuperer que la cle mise en parametre

echo"<pre>";
print_r($listeNoms);
echo "</pre>";

sort($listeNoms);

echo"<pre>";
print_r($listeNoms);
echo "</pre>";

foreach($listeNoms as $nom){
    echo $nom."<br>";
}