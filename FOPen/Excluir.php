<?php

$file = fopen("log.txt", "w+");

fclose($file);

unlink("log.txt");

echo "Arquivo Removido com sucesso";

?>