<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once("confi.php");

use Cliente\Cadastroo;

$cad = new Cadastroo();

$cad->setNome("Amanda");
$cad->setEmail("amanda@gmail.com");
$cad->setSenha("123456");
$cad->registrarVenda();
echo "<br>";
echo $cad;

?>