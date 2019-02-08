<?php

$name = "images";
if(!is_dir($name)){		//se um diretório existe
	mkdir($name);		//criar um diretório
	echo "Diretório criado com sucesso";

}else {

	rmdir($name);   //exclui um diretório
	echo "Já existe o diretório: " . $name;
}     

?>