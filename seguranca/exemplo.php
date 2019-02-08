<?php

//ejetar dados junto com alguma ação do programa

if($_SERVER["REQUEST_METHOD"] === 'POST'){

	$cmd = escapeshellcmd($_POST["cmd"]);  //toda vez que vier dados via post, ela vai escapar, os comandos não são efetuados, sendo transformados em string

	var_dump($cmd);

	echo "<pre>";

	$comando = system($cmd, $retorno);

	echo "</pre>";
}

?> 
<form method="post">
	
	<input type="text" name="cmd">
	<button type="submit">Enviar</button>

</form>