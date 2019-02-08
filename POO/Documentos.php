<?php

class Documento{

	private $numero;

	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($numero){
		$this->numero = $numero;
	}
}

class CPF extends Documento {
	public function validar():bool{
		$numeroCRPF = $this->getNumero();

		return true;
	}
}

$doc = new CPF();
$doc->setNumero("422935608-05");
var_dump($doc->validar());
echo "<br>";
echo $doc->getNumero();

?>