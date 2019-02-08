<?php

class Pessoa{
	
	public $nome;

	public function falar(){

		return "o meu nome eh ".$this->nome;
	}
}

	$glaucio = new Pessoa();
	$glaucio->nome = "Amanda";
	echo $glaucio -> falar();

?>