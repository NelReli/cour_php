<?php
var_dump($_POST);

$dsn = "mysql:host=localhost;dbname=societe";
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

if($_SERVER["REQUEST_METHOD"]== "POST"){
    if(isset($_POST["form_number"])){
        // si $_POST['prenom'] est vrai et existe alors on l'affecte à la variable $prenom SINON on lui affecte une chaine vide 
        $prenom  = $_POST['prenom'] ?? '';
        $nom     = $_POST['nom'] ?? '';
        $sexe    = $_POST['sexe'] ?? '';
        $service = $_POST['service'] ?? '';
        $date_embauche = $_POST['date_embauche'] ?? '';
        $salaire = $_POST['salaire'] ?? 0;

        // requete avec prepare et INSERT INTO en sql

        $sql="INSERT INTO employes(prenom, nom, sexe, service, date_embauche, salaire) VALUES (:prenom, :nom, :sexe, :service, :date_embauche, :salaire)"; 
        
        // on stocke la requête SQL dans une variable $sql
        // :prenom, :nom, :sexe, :service, :date_embauche, :salaire :paramètre de la requête vide 

        $stmt = $pdo->prepare($sql);
        // on prepare la requête fournie ($sql)
        // elle est analysé par SQL
        // rien n'est encore envoyé à la base de données
        // c'est comme dire :
        // "Voici ma requête que je te donne en mode brouillon pour que'elle soit prête quand j'aurais de vrai données"

        // elle retourne un objet spéciale qui est PDOStatement

        $stmt->execute([

            ':prenom'         => $prenom,
            ':nom'            => $nom,
            ':sexe'           => $sexe,
            ':service'        => $service,
            ':date_embauche'  => $date_embauche,
            ':salaire'        => $salaire
        ]);
        // ici on exécute la requête avec les vrais valeurs

        // PDO va vérifier si les paramètres sont corrects
        // PDO va preotéger contre la requête contre les injections SQL
        // PDO fait tout le boulot


    }
}

?>