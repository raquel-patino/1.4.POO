<?php
class Employee {

    protected $nombre;
    protected $sueldo;

public function initialize ( string $nom, int $sou) : void {
    $this->nombre = $nom;
    $this->sueldo = $sou;
}

public function print () : string{
 if ($this->sueldo > 6000) {
    $resultado = $this->nombre . ", tienes que pagar impuestos."; 
 }else {
    $resultado = $this->nombre . ", no tienes que pagar impuestos.";
 }
return $resultado;

}
}



?>