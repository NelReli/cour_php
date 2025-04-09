<h1>PDO</h1>

<p>PDO est un accès à la base de données</p>
<p>PDO en PHP signifie PHP data Objects</p>
<p>PDO est une interface ortienté objet fourni par PHP pour accéder à différentes base de données</p>

<h2>À quoi sert PDO ?</h2>

<ul>
    <li>Se connecter à plusieurs base de données (MySQL, PostgreSQL, SQLite, etc...)</li>
    <li>Utiliser des requêtes préparées pour éviter les injections SQL</li>
    <li>Centraliser les fonctions de gestions de base de données</li>
</ul>

<?php


//--------------------------------------
// connexion à la base de données
//--------------------------------------


// Chaîne de connexion DSN (Data Source Name)
$dsn = "mysql:host=localhost;dbname=societe"; // Remplacer 'societe' par le nom réel de votre base
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

// try catch est un mécanisme de gestion des erreurs qui permet :
// d'essayer un bloc de code potentiellement risqué
// et de réagir proprement si une erreur se produit
// sans interompre le code brutalement

// sans le try catch, si la connexion échoue, le script s'arrête brutalement avec un message d'erreur

function debug($params){
    echo "<pre>";
    print_r($params);
    echo "</pre>";
}

//cette fonction liste les méthodes dans l'objet $pdo issue de la class PDO
debug(get_class_methods($pdo));

// la class PDO est un modèle ou un plan, à l'intérieur de cette class il y a des méthodes (fonctions) qui servent à communiquer avec la base de données.

// PDO : class native 
// new PDO() : instance de la class PDO
// $pdo : c'est la variable qui contient l'objet PDO.


// REQUETE AVEC EXEC
//--------------------
// Pour : insert / update / delete

// la méthode exec exécute une requête SQL 
// l'operateur "->" est utilisé pour appeler une méthode sur un objet

// ajout employé avec exec et INSERT INTO en sql : 
$pdo->exec("INSERT INTO employes(prenom, nom, sexe, service, date_embauche, salaire) VALUES ('john', 'Doe', 'M', 'RH', '2023-01-01', 2000)"); 

// suppression employé avec exec et DELETE FROM en sql :
$pdo->exec("DELETE FROM employes WHERE id = 31"); 

// modification un employé avec exec et UPDATE en sql :
$pdo->exec("UPDATE employes SET salaire = 5000 WHERE id = 34");

// exec exécute des codes directement sans protection contre les injections sql
// donc dangereux si on insère des données utilisateurs






?>
