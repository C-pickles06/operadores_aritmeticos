<?php 
echo "Ingresa un numero \n";
$a=readline();
echo "Ingresa otro numero \n";
$b=readline();
echo "Ingresa un operador \n";
$operador=readline();

if ($operador == "+"){
echo "".$sum = $a + $b;
}elseif($operador == "-"){
echo $rest = $a - $b;
}elseif($operador == "*"){
echo $mul = $a * $b;
}elseif($operador == "/"){
echo $div = $a / $b;
}elseif($operador == "%"){
echo $mod = $a % $b;
}
?>
