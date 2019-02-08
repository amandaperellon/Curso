<?php

$cep = "02617000";

$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);  //comecando

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   //CURLOPT_RETURNTRANSFER é para os dados irem  e voltarem
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  //CURLOPT_SSL_VERIFYPEER não vai validar se estiver em um orgão público

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);   //transforma json em array

print_r($data);
?>