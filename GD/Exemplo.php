<?php

header("Content-Type: image/png");

$image = imagecreate(256, 256);

$black = imagecolorallocate($image, 0, 0, 0);   //a primeira cor que vc add sempre será a sua cor de fundo
$red = imagecolorallocate($image, 255, 0, 0);

//escrever na tela
imagestring($image, 5, 60, 120, "Curso de PHP 7", $red);   

imagepng($image);  //por que definimos no header que seria uma image/png

imagedestroy($image);
?>