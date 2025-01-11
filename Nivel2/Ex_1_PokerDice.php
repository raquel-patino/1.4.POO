<?php
require_once "Ex_1_PokerDice_Dado.php";

$dado1= new Dado ();
$dado2= new Dado ();
$dado3= new Dado ();
$dado4= new Dado ();
$dado5= new Dado ();

echo "Tirada del dado 1: ". $dado1->throw() . PHP_EOL;
echo "Tirada del dado 2: ".$dado2->throw() . PHP_EOL;
echo "Tirada del dado 3: ".$dado3->throw() . PHP_EOL;
echo "Tirada del dado 4: ".$dado3->throw() . PHP_EOL;
echo "Tirada del dado 5: ".$dado3->throw() . PHP_EOL;
echo "Cara del dado 1: " . $dado1->shapeName() . PHP_EOL;
echo "Cara del dado 2: " . $dado2->shapeName() . PHP_EOL;
echo "Cara del dado 3: " . $dado3->shapeName() . PHP_EOL;
echo "Cara del dado 4: " . $dado1->shapeName() . PHP_EOL;
echo "Cara del dado 5: " . $dado1->shapeName() . PHP_EOL;
echo "Tiradas totales: ". Dado::getTotalThrows();




?>