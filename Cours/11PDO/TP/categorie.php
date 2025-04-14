<?php
echo "<pre>";
var_dump($_GET);
print_r($_GET);
echo "</pre>";


$dsn = "mysql:host=localhost;dbname=boulangerie_simple"; 
$user = "root";
$password = ""; 

try {
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ]);
    echo "connexion réussie";
} catch (PDOException $exception) {
    echo "Erreur de connexion à la base de données : " . $exception->getMessage();
    exit;
}

if(!isset($_GET['categorie'])){
    die ("Aunce catégorie n'a été selectionnée") ;
}

$categorie=$_GET['categorie'];

$sql = "SELECT * FROM produit WHERE categorie = :categori";

$stmt = $pdo->prepare($sql);
$stmt->execute([':categori'=>$categorie]);

$produit = $stmt->fetchAll();

    echo "<pre>";
    print_r($produit);
    echo "</pre>";
    echo "<div style='display:flex; justify-content:space-around'>";

    foreach ($produit as $prod) {        
        echo "<div style='border:2px solid rgb(12, 71, 71); width: 200px; height:200px; border-radius: 15px; text-align: center; box-shadow: 5px 5px 15px 5px rgba(0,0,0,0.39); background-color: rgba(12, 71, 71, 0.616);'>";
        echo "<h2>" . $prod['nom'] . "</h2>";
        echo "<p>" . $prod['categorie'] . "</p>";
        echo "<p> Le prix est : " . $prod['prix'] . " €/Unité </p>";
        echo "</div>";
    }
    echo "</div>";

    ?>