<?php

require('conexionBD.php');

$i = $_POST['id'];
$nom = $_POST['nombre'];
$apel = $_POST['apellido'];
$eml = $_POST['email'];


//Insertar datos

$sql = "UPDATE usuarios SET nombre='$nom', apellidos='$apel', email='$eml' WHERE id='$i'";

if(mysqli_query($coneccion, $sql)){

	echo "Datos Actualizados, !!ERES EL MEJOR¡¡ <a href='index.html'>Volver</a>";

}else{

	echo "Error al actualizar los datos: " . mysqli_error($coneccion);
}

mysqli_close($coneccion);

?>