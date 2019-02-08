<?php

class Endereco{
	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($logradouro, $numero, $cidade){

		$this->logradouro = $logradouro;
		$this->numero = $numero;
		$this->cidade = $cidade;

	}

	public function __destruct(){

		//var_dump("DESTRUIR")
		//remover da memória
	}

	public function __toString(){
		return $this->logradouro.", ".$this->numero." - ".$this->cidade;
	}
}


$endereco = new Endereco("Rua 1", "220", "São Paulo");
echo $endereco;
//unset($endereco);
?>