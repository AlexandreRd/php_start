<?php 
	require ('conexion.php');

	$query = "insert into consultas (nombre, dinero) values ('Jacubo', 175.6);";

	if ($conn->query($query) === TRUE) {
    	echo "New record created successfully";
	} else if ($conn->errno == 1062) {
    	echo "Entrada duplicada";
	}
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>