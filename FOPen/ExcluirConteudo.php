<?php

if(!is_dir("hello")) mkdir("hello");

foreach (scandir("hello") as $item) {   //scandir le tds os arquivos do diretório
	if(!in_array($item, array(".", ".."))){
		unlink("hello/" . $item);  //unlink exclui arquivos e diretórios
	}
}

echo "OK"

?>