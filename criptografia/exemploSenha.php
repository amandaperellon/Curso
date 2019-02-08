<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

//dois tipos de defesa em camadas
//1-Arquitetura Fisica - Seguranca do servidor web, quem tem acesso aos codigos/bdd, hospedagem do site
//2-Programacao - Armazenar, ao invés dos dados do usuário em um arquivo de texto no pc dele, o seu hashcode com outras segurancas

define('SECRET_IV', pack('a16', 'senha'));

define('SECRET', pack('a16', 'senha'));

$data = ["nome"=>"HCode"];

$openssl = openssl_encrypt(json_encode($data), "AES-128-CBC", SECRET, 0, SECRET_IV);

echo $openssl . "<br>";   //encrypt na senha

$string = openssl_decrypt($openssl, "AES-128-CBC", SECRET, 0, SECRET_IV);

var_dump(json_decode($string, true)); //decrypt na senha
?>