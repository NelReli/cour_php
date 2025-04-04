<?php
session_start();
var_dump($_SESSION);

if(isset($_psot["logout"])){
    session_unset();
    session_destroy();
}

header('Location:index.php');
exit();
?>