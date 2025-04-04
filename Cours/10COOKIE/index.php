<?php
session_start();
print_r($_SESSION);
echo "<br>";
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

if(isset($_POST['login'])){

    if(isset($_POST['nom']) && isset($_POST['prenom'])){
        $_SESSION["nom"]=$_POST["nom"];
        $_SESSION["prenom"]=$_POST["prenom"];
        
    }
        
    $session_nom=$_SESSION["nom"];
    $session_prenom=$_SESSION["prenom"];

    setcookie("cookie_nom",$session_nom,time()+(86400*30),"/cour_php/Cours/10COOKIE/");
    setcookie("cookie_prenom",$session_prenom,time()+(86400*30),"/cour_php/Cours/10COOKIE/");

    header('Location:welcome.php');
    exit();
}
?>


<form method="post">

    <label for="">Nom</label>
    <input type="text" value="<?php echo isset($_COOKIE['cookie_nom']) ? htmlspecialchars($_COOKIE['cookie_nom']) : "" ?>" name="nom">
    
    <label for="">Prénom</label>
    <input type="text" value="<?php echo isset($_COOKIE['cookie_prenom']) ? htmlspecialchars($_COOKIE['cookie_prenom']) : "" ?>" name="prenom">

    <input type="submit" name="login" value="login">

</form>

