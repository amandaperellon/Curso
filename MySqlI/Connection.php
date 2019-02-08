<?php

$conn = new mysqli("192.168.14.224", "usr_teste", "1234", "dbphp7");

if($conn->connect_error){
	echo "Error" . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuario (deslogin, dessenha) VALUES (?, ?)");

$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "123456";

$stmt->execute();

$login = "amanda";
$pass = "9876";

$stmt->execute();

?>