<?php

function ola(){
	
	return "ola!!!!!<br>";
}

echo ola();

echo "////////////////////////////////////////////////////////////////////";

echo "<br>";

$frase = ola();

echo strlen($frase);

echo "<br>";

echo "////////////////////////////////////////////////////////////////////";

function salario(){
	return 1000;
}

echo "<br>Recebi 3 salarios = " . salario() * 3;

echo "<br>";

echo "////////////////////////////////////////////////////////////////////";

function olaa($texto, $periodo="Bom dia"){   //
	
	return "ola $texto !! $periodo <br>";
}

echo "<br>";

echo olaa("Amanda", "Boa Tarde");
echo olaa("Camila");

echo "////////////////////////////////////////////////////////////////////";

echo "<br>";

$a = 10;

function trocaValor(&$b){   //& é uma passagem de paramentro por referência, atualiza a variável iniciada antes do bloco, diferente da por valor, que não atualiza a variável iniciada antes do bloco.
	$b = 50;
	return $b;
}

echo trocaValor($a);
echo "<br>";
echo $a;
echo "<br>";

echo "////////////////////////////////////////////////////////////////////";

echo "<br>";

function soma(int...$valores){
	return array_sum($valores);
}

echo soma(2,2);

echo "<br>";

echo "////////////////////////////////////////////////////////////////////";

echo "<br>";


?>