<?php
require_once "Ex_2_Tema4_POO_Shape.php";
class Rectangulo extends Shape {

    public function area (){
        $area = $this->ample * $this->alt;
        echo "El área del rectángulo es: " . $area;
    }

}





?>