<?php

$file = fopen("log.txt", "a+");    //w+ sobrepõe o texto, a+ preserva o texto e escreve embaixo

fwrite($file, date("Y-m-d, H:i:s") . "\r\n");

fclose($file);

echo "Arquivo criado com sucesso";
?>