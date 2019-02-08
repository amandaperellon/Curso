<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuario ORDER BY deslogin");

$headers = array();

foreach ($usuarios[0] as $key => $value) {
	array_push($headers, ucfirst($key));  //ucfirst deixa a prmeira letra maiúscula
}

$file = fopen("usuarios.csv", "w+");  //csv é um tipo de arquivo formatado

fwrite($file, implode(",", $headers) . "\r\n");

foreach ($usuarios as $row) {

	$data = array();

	foreach ($row as $key => $value) {
		array_push($data, $value);
	}//end foreach de coluna

	fwrite($file, implode(",", $data) . "\r\n");

}//end foreach de linha

fclose($file);
?>