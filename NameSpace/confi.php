<?php

spl_autoload_register(function ($nomeClasse){

	$dirClass = "class";
	$filename = $dirClass . DIRECTORY_SEPARATOR . str_replace("\\", "/", $nomeClasse) . ".php";  //nome inteiro

	if(file_exists($filename)){
		require_once($filename);
	}
});

?>