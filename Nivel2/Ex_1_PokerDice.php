<?php
require_once "Ex_1_PokerDice_Dado.php";


function crearDados(){
for ($i=0; $i<5; $i++){
     $dados[]= new Dado();
}
    return $dados;
}

function tirarDados($dados){
foreach ($dados as $dado){
    $dado->throw();
}
}

function mostrarCaraDado($dados){
foreach($dados as $dado){
    echo "Cara del dado: " . $dado->shapeName() . PHP_EOL;
}
}

function jugarDados(){
    $dados= crearDados();
    tirarDados($dados);
    mostrarCaraDado($dados);
    echo "Tiradas totales: ". Dado::getTotalThrows();
}

jugarDados();
?>