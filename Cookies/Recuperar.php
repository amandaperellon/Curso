<?php

if(isset($_COOKIE["NOME_DO_COOKIE"])){
	$obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);  //com true, vira array, sem, um objeto
	echo $obj->empresa;
}

?>