<?php

/*function __autoload($nomeClasse){	  	se as classes estiverem no mesmo diretório 

	require_once("$nomeClasse.php");
}*/

ini_set("display_errors", 1);
error_reporting(E_ALL);

spl_autoload_register(function ($nomeClasse){

	$dirClass = "Abstratas";
	$filename = $dirClass . DIRECTORY_SEPARATOR . $nomeClasse . ".php";  //nome inteiro

	if(file_exists($filename)){
		require_once($filename);
	}
});

$carro = new DelRey():
$carro->acelerar(80);

?>