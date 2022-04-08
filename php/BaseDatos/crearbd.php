<?php

require('conexionBD.php');

// Crear Base de Datos

$basedatos = "CREATE DATABASE inventario";

if(mysqli_query($coneccion, $basedatos)){

	echo "Base de Datos creada, eres el mejor";

}else{

	echo "Error al crear la Base de Datos: " . mysqli_error($coneccion);
}

mysqli_close($coneccion);

?>