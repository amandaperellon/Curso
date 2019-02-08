<?php

$conn = new PDO("mysql:dbname=dbphp7; host=192.168.14.224", "usr_teste", "1234");

$stmt = $conn->prepare("INSERT INTO tb_usuario (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "Camila";
$pass = "45678";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $pass);

$stmt->execute();

echo "Inserido OK!";

?>