<?php

class Pessoa{
	public $nome = "Rasmus Lerdorf";
	protected $idade = 48; //somente quem é da classe ou as filhas da classe
	private $senha = "123456"; //mais protegido que o protected, só a classe pode ver

	public function verDados(){
		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";
	}
}

$objeto = new Pessoa();

echo $objeto->verDados() . "<br/>" //aparece pq está da mesma classe
?>