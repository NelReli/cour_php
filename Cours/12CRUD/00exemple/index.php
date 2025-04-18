<?php
require_once "config/bdd.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <title>Document</title>
</head>
<body>
    
<title>Exemple de CRUD </title>


<?php
// Inclusion des contrôleurs CRUD
include_once "controllers/createController.php";
include_once "controllers/readController.php";
include_once "controllers/updatedeleteController.php";

?>

</body>
</html>