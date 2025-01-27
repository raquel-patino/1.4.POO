<?php
//declare(strict_types=1);
class Dado {

protected const CARAS= ["As","K", "Q", "J", 7, 8];
protected  $valorTirada;
protected static  $contador=0;


function throw () : void {
    ++self::$contador;
    $this->valorTirada=rand(0, (count(self::CARAS)-1));
}

function shapeName (){
return self::CARAS[$this->valorTirada];
}

static function getTotalThrows () : int{
 return self::$contador;
}


}
?>