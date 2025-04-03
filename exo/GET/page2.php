<?php
echo "<pre>"; 
var_dump($_GET);
echo"</pre>";

echo "<pre>"; 
print_r($_GET);
echo"</pre>";


$url="page1.php";

echo "<p><a href = \"$url\"> Home </a></p>";

?>




<?php

if(isset($_GET['article'])){
    echo "<p>".htmlspecialchars($_GET['article'])."</p><br>";
    echo "<p>".htmlspecialchars($_GET['category'])."</p><br>";
    echo "<p>".htmlspecialchars($_GET['prix'])."</p><br>";
}else{
    echo "<p>".htmlspecialchars($_GET['hotel'])."</p><br>";
    echo "<p>".htmlspecialchars($_GET['location-nuit'])."</p><br>";
    echo "<p>".htmlspecialchars($_GET['localisation'])."</p><br>";
}

?>


