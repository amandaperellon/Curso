<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titlecolor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100); //qnd vc repete o numero, sempre sera a cor cinza

imagestring($image, 5, 450, 150, "Certificado", $titlecolor);
imagestring($image, 5, 440, 350, "Amanda Perellon", $titlecolor);
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titlecolor);

header("Content-type: image/jpeg");

imagejpeg($image,"certificado-".date("d-m-Y").".jpg");

imagedestroy($image);  //limpa memoria

?>