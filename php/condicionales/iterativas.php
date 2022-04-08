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
    
<?php
  $a = $_POST['a'];
  $b = $_POST['b'];
?>

<div class="container">
      <h1>Estructuras de control: Iterativas, repetitivas (Cilclos o Bucles)</h1>
      <br>

<?php
  echo "<br>"."Estructura FOR"."</br>"."<br>";

  for ($a=$a; $a <= $b; $a++){
    echo "El número es ".$a." <br>";
  
  }
?>

<br>

<?php
  echo "<br>"."Estructura WHILE"."</br>"."<br>";


$x = $_POST['a'];
$y = $_POST['b'];

  while ($x <= $y) {
     
    echo "El número es ".$x." <br>";
      $x++;
  }
?>

<br>

<?php
  echo "<br>"."Estructura Do WHILE"."</br>"."<br>";

$z = $_POST['a'];
$w = $_POST['b'];

  do{

     echo "El número es ".$z." <br>";
      $z++;
  }
  while ($z <= $w);
  ?>
<br>

<?php
  echo "<br>"."Estructura FOREACH"."</br>"."<br>";

$carros = array("Reanult","Sandero","es","Mio");
  
  foreach ($carros as $value) {
    echo "$value <br>";
  }
  ?>
<br>


</div>

<!-- Optional JavaScript; choose one of the two! -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>
</html>

