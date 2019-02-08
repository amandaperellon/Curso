<?php

$conn = new PDO("mysql:dbname=dbphp7; host=192.168.14.224", "usr_teste", "1234");

$stmt = $conn->prepare("DELETE FROM tb_usuario WHERE idusuario = :ID");

$id = 4;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Deletado OK!";

?>