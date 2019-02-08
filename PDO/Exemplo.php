<?php

$conn = new PDO("mysql:dbname=dbphp7; host=192.168.14.224", "usr_teste", "1234");

$stmt = $conn->prepare("SELECT *FROM tb_usuario ORDER BY deslogin");

$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC); //ao invés de fazer o while para pegar cada linha, esse já pega todos os dados daquela tabela
//FETCH_ASSOC não deixa os dados tão pesados

foreach($result as $row){
	foreach ($row as $key => $value) {
		echo "<strong>" . $key . ": </strong>" . $value . "<br>";
	}

	echo "======================================================================<br>";
}

//var_dump($result);

?>