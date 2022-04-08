<?php

require('conexionBD.php');

$i = $_POST['id'];



//Insertar datos

$sql = "SELECT id, nombre, apellidos, email FROM usuarios WHERE id=$i";
$resultado = mysqli_query($coneccion, $sql);

if(mysqli_num_rows($resultado)>0){

	while($row = mysqli_fetch_assoc($resultado)){
		echo "Id: " . $row["id"]. " Nombre: ". $row["nombre"]. " Apellidos: ". $row["apellidos"]. " Email: ". $row["email"]. "<br>";
	}
}else{

	echo "No existe un registro con ese Id,
	<a href='formulario_insertar.html'>Inserte un Registro</a>";
}


mysqli_close($coneccion);

?>