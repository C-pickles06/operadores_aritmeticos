<?php
echo "Ingresa la cantidad de (N) que vas a ingresar a la lista \n";

$n =(int) trim(fgets(STDIN));
$elementos =[];

for($i = 0; $i< $n; $i++){

echo "Ingresa el numero ".($i + 1).": ";
$h = (int) trim(fgets(STDIN));

array_push($elementos,$h);

}

print_r($elementos);

print_r(array_filter($elementos,fn () => ()));
