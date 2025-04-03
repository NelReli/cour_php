<?php
echo "<pre>"; 
var_dump($_GET);
echo"</pre>";

echo "<pre>"; 
print_r($_GET);
echo"</pre>";
?>


<?php
echo "<p> Article : ".$_GET['article']."</p>";
echo "<p> Couleur : ".$_GET['couleur']."</p>";
echo "<p> Prix : ".$_GET['prix']." € </p>";
?>

