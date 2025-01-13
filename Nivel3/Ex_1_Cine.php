<?php
declare (strict_types=1);
require_once "Ex_1_Peliculas.php";

class Cine {

    protected  $nombre;
    protected  $poblacion;
    protected  $listadoPeliculas = [];

public function __construct( string $nombre, string $poblacion, array $listadoPeliculas ){
    $this->nombre= $nombre;
    $this->poblacion= $poblacion;
    $this->listadoPeliculas= $listadoPeliculas;
    
}

public function getPeliculas (){
    return $this->listadoPeliculas;
}

public function datosPeliculas () : void {
    foreach ($this->listadoPeliculas as $pelicula){
        echo $pelicula->toString() . PHP_EOL;
    }
}

public function peliculaMasLarga() : string {
    
    $peliculaMasLarga= $this->listadoPeliculas[0];
    for ($i=0; $i<count($this->listadoPeliculas); $i++){
        if($this->listadoPeliculas[$i]->getDuracion() > $peliculaMasLarga->getDuracion()){
           $peliculaMasLarga= $this->listadoPeliculas[$i];
        }
    }
    return $peliculaMasLarga->toString();
 
}


}









?>