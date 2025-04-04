<?php
session_start();
var_dump($_POST);
var_dump($_SESSION);

if (isset($_POST['logout'])) {
    session_unset(); // supprime toutes les variables de session
    session_destroy(); // destroy session
    header("location: connexion.php");
}

?>