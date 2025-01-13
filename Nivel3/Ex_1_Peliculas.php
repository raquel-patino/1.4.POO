<?php
declare (strict_types=1);

class Pelicula {

    protected  $nombre;
    protected  $duracion;
    protected  $director;


public function __construct(string $nombre, int $duracion, string $director) {
    $this->nombre = $nombre;
    $this->duracion= $duracion;
    $this->director=$director;
}

public function getDuracion() {
    return $this->duracion;
}
public function getDirector(){
    return $this->director;
}

public function toString() : string{
    return "Nombre: $this->nombre, Duracion: $this->duracion, Director: $this->director";
}


}





?>