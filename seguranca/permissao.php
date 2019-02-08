<?php

$pasta = "arquivos";
$permissao = "0775";

if(is_dir($pasta))
{ 
	mkdir($pasta, $permissao);
	echo "Diretório criado com sucesso";
}

//0 - Sem nenhuma permissao
//1 - Permissao de execução
//2 - Permissao de gravacao
//3 - Permissoes 1 e 2
//4 - Permissao de somente leitura
//5 - Permissao de leitura e execucao
//6 - Permissao de leitura e gravacao
//7 - Permissao de leitura, execucao e gravacao (total)


//ex: permissão 775
//primeiro digito - Dono do diretório tem qual acesso
//segundo digito - Grupos de Usuários tem qual acesso
//terceiro digito - Outros/Convidados tem qual acesso
?>