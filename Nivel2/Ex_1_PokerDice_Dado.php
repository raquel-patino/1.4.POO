<?php
declare(strict_types=1);
class Dado {

protected array $caras= ["As","K", "Q", "J", 7, ];
protected int $valorTirada;
protected static int $contador=0;



function throw () : int {
    ++self::$contador;
    $this->valorTirada=rand(0, (count($this->caras)-1));
    return $this->valorTirada;
}

function shapeName () : mixed {
return $this->caras[$this->valorTirada];
}

static function getTotalThrows () : int{
 return self::$contador;
}


}
?>