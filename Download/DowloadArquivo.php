<?php

$link = "https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);  //pegando os

$parse = parse_url($link);

$basename = basename($parse["path"]);  //recebe o arquivo, renomeia tbm 

$file = fopen($basename, "w+");

fwrite($file, $content);   //escrevendo no disco rigido, criando uma cópia

fclose($file);
?>

<img src="<?=$basename?>">