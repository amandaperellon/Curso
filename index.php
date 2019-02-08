<?php

$pessoa = array();

array_push($pessoa, array(
	'nome' => 'Joao',
	'idade' => 20
));

array_push($pessoa, array(
	'nome' => 'Glaucio',
	'idade' => 25
));

//rint_r($pessoa[0]['nome']);

echo json_encode($pessoa);  //transforma array em Json

$json = '[{"nome":"Joao","idade":20},{"nome":"Glaucio","idade":25}]';

echo json_decode($json);  //tranforma Json em Array

var_dump($json);

?>