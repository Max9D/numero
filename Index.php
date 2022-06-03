<?php
require_once("Numero.php");
$numero = new Numero(5);
echo $numero->n;
echo("<hr>");
echo $numero->va();
if($numero->par()) echo "<hr> es par";
else echo "<hr> es impar"
?>