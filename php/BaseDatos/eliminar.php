<?php

require('conexionBD.php');

$i = $_POST['id'];



//Insertar datos

$sql = "DELETE FROM usuarios WHERE id=$i";


if(mysqli_query($coneccion, $sql)){

	echo "Registro Eliminado, !!ERES EL MEJOR¡¡ <a href='index.html'>Volver</a>";

}else{

	echo "Error, no existe el registro: ". mysqli_error($coneccion);
}


mysqli_close($coneccion);

?>