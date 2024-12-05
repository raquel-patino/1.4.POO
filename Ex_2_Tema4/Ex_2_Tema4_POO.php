<?php
require_once "Ex_2_Tema4_POO_Triangulo.php";
require_once "Ex_2_Tema4_POO_Rectangulo.php";

$triangulo = new Triangulo (2.5, 3.5);
$rectangulo = new Rectangulo (5, 6);

$triangulo -> area();
echo "<br>";
$rectangulo -> area();

?>