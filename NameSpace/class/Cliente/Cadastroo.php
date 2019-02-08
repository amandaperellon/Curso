<?php

namespace Cliente;

class Cadastroo extends \Cadastroo{
	public function registrarVenda(){
		echo "Foi registrada uma venda para o cliente " . $this->getNome();
	}
}

?>