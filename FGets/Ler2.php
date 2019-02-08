<?php

$filename= "logo.png";

$base64 = base64_encode(file_get_contents($filename));  //base_encode transforma em string o content

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

$base64encode =  "data:". $mimetype . ";base64,". $base64;

?>

<a href="<?=$base64encode?>" > link para a imagem </a>
<img src="<?=$base64encode?>">