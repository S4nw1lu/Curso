<?php

require('conexionBD.php');
//Crear Tabla

$sql = "CREATE TABLE usuarios(
Id INT(30) PRIMARY KEY,
Nombre VARCHAR(30) NOT NULL,
Apellidos VARCHAR(30) NOT NULL,
Email VARCHAR(30))";

if(mysqli_query($coneccion, $sql)){

	echo "Tabla creada, eres el mejor";

}else{

	echo "Error al crear la Tabla: " . mysqli_error($coneccion);
}

mysqli_close($coneccion);

?>