<?php

require('conexionBD.php');


date_default_timezone_set("America/Bogota");

//Para realizar la copia de seguridad se debe declarar una variable que haga reerencia a la ubicacion del archivo mysqldump.exe

$mysqldump = '"C:\xampp\mysql\bin\mysqldump.exe"';
$backup_file = '"C:\xampp\htdocs\cursoPHP\php\BaseDatos\backups\"'.$dbname. "-" .date("Y-m-d-H-i-s"). ".sql";
system("$mysqldump --no-defaults -u $username -p$password $dbname > $backup_file");


echo "Copia de seguridad realizada con exito, !!ERES EL MEJOR¡¡, <a href='index.html'>Volver</a>";

?>