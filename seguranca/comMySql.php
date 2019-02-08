<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

$id = (isset($_GET["id"]))?$_GET["id"]:1;

if(!is_numeric($id) || strlen($id) > 5){
	exit("Pegamos voce");
}

$conn = mysqli_connect("192.168.14.224", "usr_teste", "1234", "dbphp7");  

$sql = "SELECT * FROM tb_usuario WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)) {
	//echo $resultado->deslogin."<br>";
	var_dump($resultado);
}

?>