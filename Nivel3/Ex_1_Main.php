<?php
declare(strict_types=1);
require_once "Ex_1_Peliculas.php";
require_once "Ex_1_Cine.php";



$pelicula1= new Pelicula("Las Horas", 120, "Stephen Daldry");
$pelicula2= new Pelicula ("Pulp Fiction", 130, "Quentin Tarantino");
$pelicula3= new Pelicula ("Love Actually", 90, "Richard Curtis");
$pelicula4= new Pelicula ("Mr.Nobody", 99, "Jaco Van Dormael");
$pelicula5= new Pelicula ("Dune", 180, "Denis Villeneuve");
$pelicula6= new Pelicula ("The Lobster", 170, "Giorgios Lanthimos");


$cine1= new Cine ( "Cinesa Diagonal Mar", "Barcelona", [$pelicula1,$pelicula2,$pelicula5]);
$cine2= new Cine ("Cine Luz del Tajo", "Toledo", [$pelicula3,$pelicula2,$pelicula6]);
$cines = [$cine1,$cine2];

$cine1->datosPeliculas();
echo "La película con más duración es: ". $cine1->peliculaMasLarga(). PHP_EOL;
buscarPeliculas("Quentin Tarantino", $cines);

function buscarPeliculas( string $director, array $cines ) : void{
    $i=0;
    foreach($cines as $cine){
        foreach ($cine->getPeliculas() as $pelicula){
             if(strcasecmp($pelicula->getDirector(), $director) == 0){
                $pelisDirector[$i]= $pelicula->toString();
                }
            $i++;
            }
        }
        
        foreach(array_unique($pelisDirector) as $peli){
            echo $peli;
        }

}







?>