<!DOCTYPE html>
<html lang="es">
<body>
	<h1>Mi página en PHP</h1>	

<?php
	echo"Bienvenidos a mi página familiar en PHP"."<br>";
	echo" Me encanta programar";
	
$a = 26;
$b = 4.235;
$c = 5E-6;	
$d = "Aprendiendo PHP";
$e = true;
$f = array('Renault','Sandero','MIO');
define(valor, 4);

echo "Varible de tipo entero: ".$a."<br>";
echo "Variable de tipo float: ".$b."<br>";
echo "Variable de tipo punto flotante: ".$c."<br>";
echo "Variable de tipo cadena: ".$d."<br>";
echo "Variable de tipo lógico: ".$e."<br>";
print_r($f);
echo "<br>";
echo "Variable de tipo Constante: ".valor."<br>";

?>

</body>
</html>