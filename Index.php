<?php
require_once("Numero.php");
require_once("Fraccion.php");
/*$numero = new Numero(5);
echo $numero->n;
echo("<hr>");
echo $numero->va();
if($numero->par()) echo "<hr> es par";
else echo "<hr> es impar"*/


$n1 = new Numero(1);
$n2 = new Numero(3);
$frac = new Fraccion($n1,$n2);
$frac->dibujar();



?>