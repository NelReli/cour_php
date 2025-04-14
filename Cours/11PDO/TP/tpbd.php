<?php

$dsn = "mysql:host=localhost;dbname=boulangerie_simple"; // Remplacer 'societe' par le nom réel de votre base
$user = "root"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe de l'utilisateur MySQL

try {
    /**
     * Création d'une instance PDO pour la connexion à la base de données
     *
     * PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION : active le mode exception pour la gestion des erreurs SQL
     * PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC : les résultats seront récupérés sous forme de tableau associatif
     * PDO::ATTR_EMULATE_PREPARES => false : désactive l'émulation des requêtes préparées (meilleure sécurité et performance)
     */
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ]);
    echo "connexion réussie";
} catch (PDOException $exception) {
    // Affichage de l'erreur si la connexion échoue
    echo "Erreur de connexion à la base de données : " . $exception->getMessage();
    exit;
}
$sql="SELECT * FROM categorie";

$stmt=$pdo->prepare($sql);
$stmt->execute();

$categories=$stmt->fetchAll();

?>

<header>
    <nav>
        <ul>
            <?php foreach ($categories as $key) {
                echo "<li><a href='categorie.php?categorie=$key[nom]'>$key[nom]</a></li>";
            }?>
        </ul>
    </nav>
</header>
<?php
$sql = "SELECT * FROM produit";

$stmt = $pdo->prepare($sql);
$stmt->execute();

$produit = $stmt->fetchAll();

echo "<pre>";
print_r($produit);
echo "</pre>";
echo "<div style='display:flex; justify-content:space-around'>";
foreach ($produit as $prod) {
    // echo "<p> ".$prod['nom']." est à ".$prod['prix']."€/Unité  </p>";

    echo "<div style='border:2px solid rgb(12, 71, 71); width: 200px; height:200px; border-radius: 15px; text-align: center; box-shadow: 5px 5px 15px 5px rgba(0,0,0,0.39); background-color: rgba(12, 71, 71, 0.616);'>";
    echo "<h2>" . htmlspecialchars($prod['nom']) . "</h2>";
    echo "<p>" . htmlspecialchars($prod['categorie']) . "</p>";
    echo "<p> Le prix est : " . htmlspecialchars($prod['prix']) . " €/Unité </p>";
    echo "</div>";
}
echo "</div>";


$sql = "SELECT * FROM utilisateur WHERE prenom ='marie' ";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$utilisateur = $stmt->fetch();


echo "<pre>";
print_r($utilisateur);
echo "</pre>";

echo "<p>" . $utilisateur['nom'] . " est fan de " . $produit[2]['nom'] . " </p>";





?>

<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);




// Chaîne de connexion DSN (Data Source Name)
$dsn = "mysql:host=localhost;dbname=boulangerie_simple"; // Remplacer 'societe' par le nom réel de votre base
$user = "root"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe de l'utilisateur MySQL

try {
    /**
     * Création d'une instance PDO pour la connexion à la base de données
     *
     * PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION : active le mode exception pour la gestion des erreurs SQL
     * PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC : les résultats seront récupérés sous forme de tableau associatif
     * PDO::ATTR_EMULATE_PREPARES => false : désactive l'émulation des requêtes préparées (meilleure sécurité et performance)
     */
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ]);
    echo "Connexion réussie";
} catch (PDOException $exception) {
    // Affichage de l'erreur si la connexion échoue
    echo "Erreur de connexion à la base de données : " . $exception->getMessage();
    exit;
}


// je selectionne  produit de la base de données
$sql = "SELECT * FROM produit ";

$stmt = $pdo->prepare($sql);

$stmt->execute();

// je recupere la liste des produits de la base de données stocké dans $produits
$produits = $stmt->fetchAll();

// echo "<pre>";
// print_r($produits);

// echo "</pre>";

?>

<section style="width:100%; display:flex; border: 1px solid #000; padding: 10px; margin: 10px; flex-wrap: wrap; gap: 10px;">

    <?php foreach ($produits as $produit) : ?>

        <div style="border: 1px solid #000; padding: 10px; margin: 10px; width: 200px; ">

            <div style="width:100%;">
                <img style="width:100%;" src="https://media.istockphoto.com/id/496564915/fr/photo/pain-et-petits-pains.jpg?s=612x612&w=0&k=20&c=RFPiTwOdeBi3kY8ge-W51Dpe8OiMWaDC5PAa5rEQOzY=" alt="">
            </div>

            <div style="width:100%;">
                <h3><?= $produit['nom']; ?></h3>
            </div>

            <p><?= $produit['categorie']; ?></p>
            <p><?= $produit['prix']; ?> €</p>

        </div>

    <?php endforeach; ?>

</section>

<?php


$sql = "SELECT * FROM utilisateur WHERE id = 1 ";

$stmt = $pdo->prepare($sql);

$stmt->execute();

$utilisateur = $stmt->fetch();

// var_dump($utilisateur);

?>

<p><?= $utilisateur['nom'] . " " . $utilisateur['prenom']; ?> est fan de <?= $produits[2]['nom']; ?></p>