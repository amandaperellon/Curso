<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titlecolor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100); //qnd vc repete o numero, sempre sera a cor cinza

imagettftext($image, 32, 0, 320, 250, $titlecolor, "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "Certificado");
imagettftext($image, 32, 0, 375, 350, $titlecolor, "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Amanda Perellon");
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titlecolor);

header("Content-type: image/jpeg");

imagejpeg($image);

imagedestroy($image);  //limpa memoria

?>