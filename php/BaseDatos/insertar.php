<?php

require('conexionBD.php');

$i = $_POST['id'];
$nom = $_POST['nombre'];
$apel = $_POST['apellido'];
$eml = $_POST['email'];


//Insertar datos

$sql = "INSERT INTO usuarios (Id, Nombre, Apellidos , Email)
VALUES('$i', '$nom', '$apel', '$eml')";	

if(mysqli_query($coneccion, $sql)){

	echo "Datos Guardados, !!ERES EL MEJOR¡¡ <a href='index.html'>Volver</a>";

}else{

	echo "Error al guardar los datos: " .$sql . "<br>" . mysqli_error($coneccion);
}

mysqli_close($coneccion);

?>