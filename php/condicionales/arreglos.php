<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


    <title>Estructuras Iterativas</title>
  
 </head>
 <body>
    
<div class="container">
  <h1>Arreglos</h1> 
  <br>

<?php
  echo "<br>"."<br>"."Arreglo indexado mediante FOREACH"."<br>"."<br>";

 $carros = array('Reanult', 'Toyota', 'Jeep', 'Ford' );

 foreach ($carros as $value) {
   echo "$value <br>";
 }

echo "<br>"."<br>"."Arreglo indexado mediante print_r"."<br>"."<br>";
$carros = array('Reanult', 'Toyota', 'Jeep', 'Ford' );

 print_r($carros);
 echo "<br>";

echo "<br>"."<br>"."Arreglos Asociativos"."<br>"."<br>";

$peso = array('Santiago'=>"30","Samuel"=>"12,9", "Lucy"=>"80", "Wilson"=>"68");
foreach($peso as $x => $x_valor){
  echo "Llave = " . $x . ", Valor =" . $x_valor;
  echo "<br>";
 }

echo "<br>"."<br>"."Arreglos Multidimensionales"."<br>"."<br>";
  $carros = array(
    array("Renault", 1600, 2000),
    array("Toyota", 2200, 3000),
    array("Jeep", 2600, 3200),
    array("Ford", 2600, 3200)
  );

  for ($fila=0; $fila < 4; $fila++) { 
    echo "<p><b>Fila Número $fila</b></p>";
    echo "<ul>";
    for ($columna=0; $columna < 3; $columna++) { 
      echo "<li>".$carros[$fila][$columna]."</li>";
    }
    echo "</ul>";
  }


echo "<br>"."<br>"."Ordenando Arreglos"."<br>"."</br>";

echo "<br>"."Sort() Orden Ascendente"."<br>";

$peso = array('Santiago'=>"30","Samuel"=>"12,9", "Lucy"=>"80", "Wilson"=>"68");
sort($peso);

foreach ($peso as $x => $x_valor) {
  echo "Llave = " . $x . ", Valor =" . $x_valor;
  echo "<br>";
}

echo "<br>"."rsort() Orden Descendente"."</br>";

$peso = array('Santiago'=>"30","Samuel"=>"12,9", "Lucy"=>"80", "Wilson"=>"68");
rsort($peso);

foreach ($peso as $x => $x_valor) {
  echo "Llave = " . $x . ", Valor =" . $x_valor;
  echo "<br>";
}

echo "<br>"."Comparación de Arreglos"."</br>";

$colores1 = array('a' => "amarillo","azul","negro","blanco" );
$colores2 = array('b' => "amarillo","blanco","azul");
$resultado = array_diff($colores1, $colores2);

print_r($resultado);
echo "<br>";


echo "<br>"."Agregar Elementos al Inicio del Arreglo"."</br>";

$jugo = array("fresa","kiwi");
array_unshift($jugo, "manzana", "naranja");
print_r($jugo);
echo "<br>";

echo "<br>"."Agregar Elementos al Final del Arreglo"."</br>";

$jugo = array("fresa","kiwi");
array_push($jugo, "manzana", "naranja");
print_r($jugo);
echo "<br>";


?>




</div>">
  


</div>



<!-- Optional JavaScript; choose one of the two! -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>
</html>