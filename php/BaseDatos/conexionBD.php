<?php

$servername = "localhost";
$username = "wsilva";
$password = "Ilove_Saint282";
$dbname = "inventario";

//Crear Conección

$coneccion = mysqli_connect($servername, $username, $password, $dbname);

//Verificar conexión

if(!$coneccion){
	die("La conexión fallo: " . mysqli_connect_error());
}
?>