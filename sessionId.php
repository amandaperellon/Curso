<?php

require_once("config.php");

session_id('1e5bd291b5da9ee51e7dce543a26d6fearray');

session_regenerate_id(); //gerar novo id de sessão

echo session_id();  //id da sessão "código"

var_dump($_SESSION);

echo "<br>";

echo session_save_path();

?>