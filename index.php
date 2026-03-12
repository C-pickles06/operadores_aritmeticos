<?php 
echo "Ingresa un numero \n";
$a=readline();
echo "Ingresa otro numero \n";
$b=readline();
echo "Ingresa un operador \n";
$operador=readline();

if ($operador == "+"){
echo "La suma es igual: ".$sum = $a + $b;
}elseif($operador == "-"){
echo "La resta es igual: "$rest = $a - $b;
}elseif($operador == "*"){
echo "La multiplicacion es igual: "$mul = $a * $b;
}elseif($operador == "/"){
echo "La division es igual: "$div = $a / $b;
}elseif($operador == "%"){
echo "El residuo es: "$mod = $a % $b;
}
?>
