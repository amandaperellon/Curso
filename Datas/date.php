<?php

echo date("d/m/Y  H:i:s");

echo "<br>";

echo time(); //desde de 1 janeiro de 1970

echo "<br>";

//$ts = strtotime("2001-09-11");
$ts = strtotime("+1 day");

echo date("l, d/m/Y", $ts);

echo "<br>";

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo ucwords(strftime("%A,%B"));

echo "<br>";

$dt = new DateTime();
$periodo = new DateInterval("P15D");

echo $dt -> format("d/m/Y H:i:s");

echo "<br>";

$dt -> add($periodo);

echo $dt -> format("d/m/Y H:i:s");

?>