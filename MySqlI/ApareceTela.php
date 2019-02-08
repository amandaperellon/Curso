<?php

$conn = new mysqli("192.168.14.224", "usr_teste", "1234", "dbphp7");

if($conn->connect_error){
	echo "Error" . $conn->connect_error;
}


$result = $conn->query("SELECT * FROM tb_usuario ORDER BY deslogin");

$data = array();

while($row = $result->fetch_array()){  //ver se tem dados e atribui na variável row
	
	array_push($data,$row);
}

echo json_encode($data)

?>