

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Premiers pas en PHP :</h1>

        <?php   
            echo "<h2> Cours 01 :</h2>"; // echo est une instruction qui permet d'afficher dans le navigateur. Toutes les instructions se terminent par un ";". Dans un echo, nous pouvons mettre aussi du HTML.
            echo "<p> Il faut écouter le cours</p>";

            $ma_premiereVariable = 'je suis la première variable';
            echo "<p> C'est notre variable : $ma_premiereVariable</p>";
            echo '<p> C\'est notre variable : '. $ma_premiereVariable .'</p>';
        ?>

    <h2>Les variables :</h2>

    <p>
        Définition : une variable est un espace mémoire qui porte un nom et permettant de conserver une valeur.
    </p>

        <?php 
        $a = 123;
        $b = "je suis une phrase";
        $c = true;
        $d = 123.5;

        echo gettype($a)."<br>";
        echo gettype($b)."<br>";
        echo gettype($c)."<br>";
        echo gettype($d)."<br>";

        $content = "<div>";
        $content .= "valeur de \$a est : $a";
        $content .= "<div>";
        echo $content;
        ?>
    
    <h2>Les Constantes :</h2>

    <!-- Une constante permet de conserver une valeur sauf que celle-ci ne peut pas être modifiée durant l'exécution du ou des scripts. Utile pour par exemple conserver les paramètres de connexion à la BDD sans pouvoir les modifier une fois définis. -->

    <p> Une constante se déclare toujours en MAJUSCULE   </p>

        <?php 
            define("ROOT", "http://localhost/cour_php/"); // On déclare une constante avec la fonction prédéfinie "define()" qui s'appelle ROOT et prend pour valeur "http://localhost/cour_php/". Par convention les constantes sont toujours écrites en majuscules.
            define("ORDI", "je suis une constante");
        //peut etre utilisé n'importe ou dans le script ce qui la rend plus flexible
            echo ROOT."<br>";
            echo ORDI."<br>";

            const API_KEY = "123456"; // généralement utilisé dans des Class PHP
            
        ?>

    <h2>Les Constantes magique :</h2>

        <?php 

            echo __LINE__; // Affiche le numéro de ligne de code ici 67
            br();
            echo __File__; // Affiche le chemin complet vers le fichier (dossier + nom du fichier)
            br();
            echo __DIR__; // Affiche le chemin complet vers le dossier de notre fichier
            
        ?>





    <p> fonction à part juste pour rajouter des sauts à la ligne</p>
    <?php
    function br(){
        echo "<br>";
    }
    ?>


</body>
</html>