<?php

//transação: quando der certo, o comando é efetuado, quando não, todo o comando é cancelado e nada acontece

$conn = new PDO("mysql:dbname=dbphp7; host=192.168.14.224", "usr_teste", "1234");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuario WHERE idusuario = ?");

$id = 2;

$stmt->bindParam(":ID", $id);

$stmt->execute(array($id));

$conn->rollback();   //cancela

//$conn->commit();    //confima

echo "Deletado OK!";

?>