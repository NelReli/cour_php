
<?php
include_once "../Cours/utils.php";
?>

<h2>Opérateurs arithmétiques</h2>

<?php

$a=12;
$b=13;

echo $a + $b."<br>";
echo $a - $b."<br>";
echo $a * $b."<br>";
echo $a / $b."<br>";
echo $a % $b."<br>";

?>

<h2>Opérateurs et affectations combinéees</h2>

<?php

$j = 10;
$g = 2;

$j += $g;   // équivaut à $j = $j + $g, $j vaut donc au final 12;
echo $j;
br();
$j -= $g;   // équivaut à $j = $j + $g, $j vaut donc au final 10;
echo $j;
br();
$j /= $g;   // équivaut à $j = $j + $g, $j vaut donc au final 5;
echo $j;
br();
$j *= $g;   // équivaut à $j = $j + $g, $j vaut donc au final 10;
echo $j;
br();
$j %= $g;   // équivaut à $j = $j + $g, $j vaut donc au final 0;
echo $j;
br();

?>


<h2>Incrémenter et décrémenter</h2>

<?php
echo "<h3>Incrémentation</h3>";

$i = 0;
echo $i;
br();
echo $i++; // incrémente et après affiche
br();
echo $i;
br();


$s = 0;
echo $s;
br();
echo ++$s; // incrémente et affiche 
br();

?>

<?php
echo "<h3>Décrémentation</h3>";

$i = 0;
echo $i;
br();
echo $i--; // décrémente et après affiche
br();
echo $i;
br();


$s = 0;
echo $s;
br();
echo --$s; // décrémente et affiche 
br();

?>