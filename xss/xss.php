<?php

//codigos html nos seus comandos de entrada

$_POST['busca'] = '<strong>oi</strong><script>alert("ok")</script>';

if(isset($_POST['busca'])){
	echo strip_tags($_POST['busca'], "<strong>");  //retira todas as tags e, como parametro, pode passar as que são permitidas 
	echo htmlentities($_POST['busca']);  //transforma os comando em texto e mostra eles na tela
}

?>

<form method="post">
	
	<input type="text" name="busca">
	<button type="submit">Enviar</button>

</form>