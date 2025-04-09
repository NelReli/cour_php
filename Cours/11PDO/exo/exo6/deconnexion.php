<?php
session_start();
var_dump($_SESSION);

if(isset($_psot["deconnection"])){
    session_unset();
    session_destroy();
}

header('Location:solution.php');
exit();
?>