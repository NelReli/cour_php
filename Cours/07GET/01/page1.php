<h1>Superglobal $_GET</h1>
<h2>Page 01</h2>

<a href="page2.php?article=Jean&couleur=Rouge&prix=123">Jean Rouge</a>
<a href="page2.php?article=Chemise&couleur=Verte&prix=50">Chemise Verte</a>
<a href="page2.php?article=Gilet&couleur=Noir&prix=75">Gilet Noir</a>

<?php
echo "<br>";
var_dump($_GET);
?>



<h4> Définition</h4>

<p> En PHP, une variable superGlobal est une variable intégrée qui est toujours disponible, même à l'intérieur d'une fonction </p>

<p> Les superGlobals sont prédéfinies par PHP</p>

<p> $_GET est utilisé pour :</p>
<ul>
    <li> Passer des informations entre pages</li>
    <li> Filtrer ou rechercher un contenu</li>
</ul>

<h4> Avantage de $_GET</h4>
<ul>
    <li> Simple à utiliser</li>
    <li> Données visibles dans l'URL</li>
</ul>

<a href="page2.php?article=Chemise&couleur=Verte&prix=50">Chemise Verte</a>
<a href="page2.php?article=Gilet&couleur=Noir&prix=75">Gilet Noir</a>

<p> "?" : ce caractère indique le début des paramètres GET qui sont envoyé au fichier PHP</p>
<p> $_GET est utiliser pour envoyer des informations via l'URL</p>
<p> Ici "article=chemise" est un paramètre GET, article est la clé et chemisa est la valeur </p>
<p> & : ce caractère est utiliser pour séparer les paramètres dans une URL</p>

<p> Limite de longueur d'URL : </p>
<p> Les navigateurs et serveurs limitent la tailles des URL</p>
<p> En général : 2083 caractères MAX</p>
