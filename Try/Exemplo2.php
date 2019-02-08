<?php

function tratarNome($name){
	if(!$name){
		throw new Exception("Nenhum nome foi informado", 1);
	}

	echo ucfirst($name)."<br>";
}

try{

	tratarNome("Amanda");
	tratarNome("");

}catch(Exception $e){

	echo $e->getMessage();

} finally{
	echo "Executou o try!!!!";
}

?>