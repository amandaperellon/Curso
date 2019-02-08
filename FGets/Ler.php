<?php
//a diferença entre fread e fgets é que o fread pede a quantidade bytes q vc quer ler, enquanto fgets le linha por linha

$filename = "usuarios.csv";

if(file_exists($filename)){
	$file = fopen($filename, "r");

	$headers= explode("," , fgets($file)); //tranforma string em array, tirando a ,

	$data = array(); 

	while($row = fgets($file)){
		$rowData = explode(",",$row);
		$linha = array();

		for($i=0; $i<count($headers) ; $i++){
			$linha[$headers[$i]] = $rowData[$i]; 
		}

		array_push($data, $linha);

	}

	fclose($file);

	echo json_encode($data);
}

?>