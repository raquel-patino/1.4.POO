<?php
require_once "Ex_2_Tema4_POO_Shape.php";

class Triangulo extends Shape {

    public function area (){
        $area = ($this->ample * $this->alt) / 2;
        echo "El área del triángulo es: ". $area;
    }

}


?>